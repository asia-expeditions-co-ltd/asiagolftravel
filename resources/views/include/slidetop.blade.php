<style type="text/css">
  .play{
    display: none;
  }
</style>
<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
        	<?php use App\component\Content; ?>
  	   @foreach($getSlide as $key => $item) 
            <?php  $active = $key == 0 ? 'active' : ''; ?>
          <div class="carousel-item  {{$active}}">
              <div class="carousel-background"  ><img src="{{Content::urlImage($item->picture, '/photos/share/')}}"  alt="" >            
              
              </div>
              <div class="carousel-container">
                <div class="carousel-content">
                     <h2 style="">{{$item->name}}</h2>
                </div>
              </div>
            
          </div>
          @endforeach
          <div class="carousel-item" data-interval="500">
            <div style="padding:55.87% 0 0 0;position:relative;">
            <iframe src="https://player.vimeo.com/video/329540973?title=0&amp;byline=0&amp;portrait=0&amp;player_id=iframe4682?autoplay=1&amp;autopause=0&amp;muted=1&amp;background=1&amp;playsinline=1" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="100%" height="100%" style="opacity: 1; visibility: inherit; width: 113.717%; height: 100%; position: absolute; left: -6.85856%; top: 0px; display: block;" id="iframe4682" __idm_id__="21133313" data-ready="true" class="resizelistener"></iframe>
          </div>
            
        </div>
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
</section><!-- #intro -->




          


<!-- add new for under slide -->
<!--   <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-4 box">
            <a href="{{route('getgolf_courses')}}">
               <img src="/photos/share/golfcourse.png">
            <h4 class="title"><a>Golf Courses</a></h4>
          </a>
         
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 box box-bg">
            <a href="{{route('gettp')}}">
              <img src="/photos/share/gofl&tours.png">
              <h4 class="title"><a>Golf And Tours Packages</a></h4>
            </a>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 box">
            <a href="{{route('gethotel_resorts')}}">
              <img src="/photos/share/hotel&resort.png">
              <h4 class="title"><a>Hotels And Resorts</a></h4>
            </a>
          </div>

        </div>
      </div>
    </section>-->
