  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
 <?php use App\component\Content;?>

@if($webs)

    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>our excursion</h3>
        </header>

        <div class="owl-carousel clients-carousel">
           @foreach($webs->chunk(3) as $key => $chunkTour)
                 @foreach($chunkTour as $tour)
                 
              <div class="item" style="padding: 10px;">
                <div class="card"><a href="{{route('tourDetails', ['url'=> $tour->slug])}}">
                  <img src="{{Content::urlImage($tour->photo)}}" alt="" class="img-fluid">
                </a>
                    <div class="card-body" style="padding: 0.35rem; margin-left: 10px;">
                      <a href=""><span class="">{{$tour->province->province_name  }}</span></a>
                    <p> <span class="text-center">{{isset($tour->tour_price) ? '$'.$tour->tour_price: ''}}</span></p>
                    <p style="overflow: hidden;height: 71px;font-size: 14px;margin: 0px;">{{$tour->title}}</p>
                    <a href="{{route('tourDetails', ['url'=> $tour->slug])}}">
                    <button class="btn btn-primary" style="height: 30px; font-size: 12px;" >View Details</button></a>
                    
                    </div>
                </div>
              </div>
                @endforeach 
             @endforeach  
        </div>

      </div>
    </section><!-- #clients -->

    <!--  Demos -->
   
@endif