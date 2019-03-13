@extends('include.header')

@section('title', 'Golf Courses Ddetails')
@section('keywords', 'Asia Golf Travel , Golf Courses')
@section('description', 'destinations to visit and have lot of golf courses')

<?php use App\component\Content;?>
@section('content')





  <!--==========================
    Header
  ============================-->
 
    <div class="mycontainer">
  <img src="/photos/share/hotel-hilton-mandalay-myanmar.jpg" alt="Nature" style="width:100%;">
  <div class="text-block">
    <h4 style="color: white; font-weight: 700;">{{ isset($tour->country) ? $tour->country->country_name: ''}}/
{{isset($tour->province) ? $tour->province->province_name: ''}}/
{{isset($tour->title) ? $tour->title: ''}}</h4>
   <!--  <p style="color: white;">What a beautiful sunrise</p> -->
 </div>

</div>
<!--  -->

@include('include.menu')
  <!--   ============================-->
 
    <div class="container" style="margin-top: 100px;"><br>
          <header class="section-header">
          <h5 class="section-title">
        <span class="">
          
            <span class="fa fa-map-pin" style="color: #f2892d; font-size: 27px; padding: 13px 12px;"></span> {{ isset($tour->country) ? $tour->country->country_name: ''}} <i class="fa fa-angle-double-right"></i> {{isset($tour->province) ? $tour->province->province_name: ''}} <i class="fa fa-angle-double-right"></i> {{$tour->title}}
        </span>
    <div class="clearfix"></div>        

</h5>
</header>
        <div class="row">         
           
            <div class="col-md-8">
              
                <div class="crane-listing bg-white">
                  @include('include.slideitem')
                
                </div>                    
            </div>
            <div class="col-md-4">
                <div class="panel single-title">
                      <div class="" style="text-align: center;">
                        <h5><i class="fa fa-calendar"></i>Golf Traveling Date</h5><br>
                    </div>
                    <form method="POST" action="{{route('reqtraveling')}}">
                        {{csrf_field()}}            
                               
                        <div class="col-md-12">
                            <div class="input-group form-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                                <input type="date" name="date" class="form-control textbox_color" placeholder="Date Check Out" required="">
                            </div>
                            <div class="form-group">
                                <div class="row">                                                                   
                                    <div class="col-md-12">
                                        <label for="pax_number">Pax No.</label>
                                        <select class="form-control textbox_color" name="pax_number" required id="pax_number">
                                            <option value="">--select--</option>
                                            @for ($i = 1; $i < 30; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                               </div>                                
                            </div>
                            <input type="hidden" name="title" value="{{$tour->title}}">
                            <input type="hidden" name="url" value="{{route('tourDetails', ['url'=> $tour->slug])}}">


                            <div class="form-group">
                                <input type="text" name="phone" class="form-control textbox_color" placeholder="Phone: +95 (1) 123 456 " required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control textbox_color" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Type message" cols="7" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <button type="submit" class="btn btn-block btn-color text-color">Request Golf Traveling</button>
                            </center>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
        <div class="clearfix" style="margin-top: 10px;" ></div>

  <div class="container">
        <div class="rows">
                    
                  
            <button  class="tablink" onclick="openPage('a', this, 'green')" id="defaultOpen">ITINARIES</button>
            <button class="tablink" onclick="openPage('c', this, 'green')">SERVICE INCLUDE/EXCLUDE</button>
             <button class="tablink" onclick="openPage('b', this, 'green')" >HIGHTLIGHT</button>

            <div id="a" class="tabcontent">
              <div class="bd-example">
              <div class="table-responsive-md ">
                  <p>{!! $tour->tour_desc !!}</p>
              </div>
             </div>
            </div>

            <div id="c" class="tabcontent">
             <div class="bd-example">
              <div class="table-responsive-md ">
               <p>{!! $tour->tour_remark !!}</p>
              </div>
             </div>
            </div>


            <div id="b" class="tabcontent">
              <div class="bd-example">
               <div class="table-responsive-md ">            
                 <p>{!! $tour->tour_highlight!!}</p> 
               </div>
              </div>
            </div>

      
        </div>
    </div>
            <div class="clearfix"></div>
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").onclick('click');
</script>

@include('include.footer')

@endsection


