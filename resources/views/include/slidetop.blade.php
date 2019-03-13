
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