
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
<main id="main">
        
      <div class="mycontainer">
          <img src="/photos/share/tpurs_golf.jpg" alt="Nature" style="width:100%;">
            <div class="text-block">
              <h4 style="color: white; font-weight: 700; padding-top: 15px;">Tours and Golf Packages</h4>             
           </div>
      </div>     
    <section id="portfolio"  class="section-bg" >
      <div class="container" id="myDIV" >

        <header class="section-header">
          <h3 class="section-title">Tours and Golf Packages</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters" class="country_tourpackage">
               @foreach($data_cunt as $dataitem)
               <li class="datacun" data-filter=".filter-kh" data-id="{{$dataitem->id}}" id="{{$dataitem->id}}">{{$dataitem->country_name}}</li>
               @endforeach 
            </ul>
          </div>
        </div>
          <div class="row" id="addtourpackage" ></div>   
          <div id="more"></div>   
      </div>
    </section>
</main>


<script type="text/javascript">
    $(document).ready(function(){
     $("#{{$dataitem->id}}").trigger('click'); 
      $(".tours").addClass('menu-active');
    });
</script>
@include('include.footer')
@endsection