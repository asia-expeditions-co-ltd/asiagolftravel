@extends('include.header')

@section('title', 'Contact Us')
@section('keywords', 'Asia Golf Travel, Golf')
@section('description', 'destinations to visit and have lot of golf courses')
<?php use App\component\Content;?>
@section('content')

  <!--==========================
    Header
  ============================-->
 @include('include.menu')
<!--==========================
      Contact Section
    ============================-->
     <main id="main" style="">
          <div class="mycontainer">
  <img src="/photos/share/download.jpg" alt="Nature" style="width:100%;">
  <div class="text-block">
    <h4 style="color: white; font-size:30px; font-weight: 700;">Contact Us</h4>
    <p style="color: white; font-weight: 700;">Destinations Golf Holiday Inquiry Form</p>
 </div>

</div>

     <section id="about" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
         
        </div>

        <div class="row contact-info"  style="text-align: center; ">

          <div class="col-md-4">
            <div class="contact-address">
              <i style="font-size: 30px;color: #18d26e;" class="ion-ios-location-outline"></i>
              <h3 >Address</h3>
              <address>E6, No 4, Anawrahtar Road, Pazundaung Township, Yangon 11171, Myanmar (Burma)</address>
            </div>
          </div>

          <div class="col-md-4" style="border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;">
            <div class="contact-phone" >
              <i style="font-size: 30px;color: #18d26e;" class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+95 (1) 200 401 / (9) 506 2644 </a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i style="font-size: 30px;color: #18d26e;" class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="">asiagolftravel.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container" style="margin-top: 40px;">
        <div class="row">
          <div class="col-lg-12">
       <div class="form">
   
 @include('include.message')
    
          <form action="{{route('sendContact')}}" method="post">
              {{csrf_field()}}
            <div class="form-row">
              <div class="form-group col-md-6">

                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="" />
               
              
              </div>
              <div class="form-group col-md-6">

                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required="" />
                
              </div>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="phone" id="" placeholder="Your Phone Number"  data-msg="Please enter at least 8 chars of subject" required="" />
             
            </div>

         
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              
            </div >
        
            <div class="text-center"><input type="submit" value="Send Message"></div>

          </form>
          
        </div>
  
</div>

<!-- form========================================================= -->


<!-- map ======================================================-->
 
             
        </div>


      </div>
    </section><!-- #contact -->

<!-- {{ \App\ConTakeme::get()}} -->
     <!-- {{\App\ConAsiaEx::get()}} -->

  </main>
    <script type="text/javascript">
 $(document).ready(function(){
     $(".Contact").addClass('menu-active');
  });
  </script>
    @include('include.footer')

@endsection