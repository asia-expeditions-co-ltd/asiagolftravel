 
 <?php use App\component\Content;?>
 
   <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">
        <div class="owl-carousel testimonials-carousel">

      @if(isset($tour->photo)? $tour->photo:'' )
           <div class="item wow bounceInUp" data-wow-duration="1.4s" style="">
              <div class="card"  id="card" >
                <img class="img-fluid" src="{{Content::urlImage($tour->photo, '/photos/share/')}}"/>

              </div>
            </div>
            @endif
            <?php $gallerys =  explode(',', rtrim(isset($tour->picture)? $tour->picture: '',',')); ?>
              @if(isset($tour->picture)? $tour->picture: '')
                @foreach($gallerys as $gal)
           
            <div class="item wow bounceInUp" data-wow-duration="1.4s" style="">
              <div class="card" id="card">
                 <img  class="img-fluid cardimg" src="{{Content::urlImage($gal, '/photos/share/')}}" />  
              </div>
            </div>
                @endforeach 
              @else
              
           @endif 

        </div></div></section>


    


 