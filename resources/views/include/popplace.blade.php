        

        <?php use App\component\Content; ?>
          <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
         <h3>Top Destinations</h3>
          <p></p>
        </div>

        <div class="row">
    @foreach(\App\Tour::gettopplace()  as $data)
   <?php $con=\App\Province::where(['province_status'=>1,'id'=>$data->p_id])->first(); ?> 

          <div class="col-lg-4 col-md-6 wow fadeInUp">
          <a href="{{route('getprovince')}}?id={{$con->id}}">
            <div class="member">
              <img src="{{Content::urlImage($con->province_photo)}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{$con->province_name}}</h4>
                  <span></span>
                </div>
              </div>
            </div>
          </a>
          </div>
             @endforeach
        </div></div></section>
