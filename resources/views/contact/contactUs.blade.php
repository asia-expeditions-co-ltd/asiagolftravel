@extends('include.header')

@section('title', 'Contact Us')
@section('keywords', 'Asia Golf Travel, Golf')
@section('description', 'destinations to visit and have lot of golf courses')
<?php use App\component\Content;?>
@section('content')
 <style type="text/css">
            .addcol{color: #002aff; }
            .addcol1:focus{color: red; border-color: red;}
          </style>

  <!--==========================
    Header
  ============================-->
 @include('include.menu')
<!--==========================
      Contact Section
    ============================-->
     <main id="main" style="">
          <div class="mycontainer">
  <img src="/photos/share/nyanmarcon.jpg" alt="Nature" style="width:100%;">
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
              <address>Anawrahtar Road, Pazundaung Township, Yangon 11171, Myanmar (Burma)</address>
            </div>
          </div>

          <div class="col-md-4" style="border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;">
            <div class="contact-phone" >
              <i style="font-size: 30px;color: #18d26e;" class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+95 (1) xxx xxx / (9) xxx xxx </a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i style="font-size: 30px;color: #18d26e;" class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="">info@asiagolftravel.com</a></p>
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

                <input type="email" class="form-control" name="email" id="eshow" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required="" />
                
              </div>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="phone" id="" placeholder="Your Phone Number"  data-msg="Please enter at least 8 chars of subject" required="" />
             
            </div>

         
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              
            </div >
              <div class="form-group" id="notrobot" style="">

                                <input  type="text" id="num1" class="form-control textbox_color"   style="float: left; width: 20%; text-align: center;" disabled>

                                <label style="font-size: 25px;float: left; width: 10%;font-weight: 500;
                                text-align: center;">+</label>
                                <input  type="text" id="num2" class="form-control textbox_color"  style="float: left; width: 20%; text-align: center;" disabled >
                                <label style="font-size: 25px;float: left;width: 10%;font-weight: 500;
                                text-align: center;">=</label>

                                <input type="text" name="myResult" id="myResult" class="form-control textbox_color" placeholder="" required style="width: 40%;">

              </div>
        
            <div class="text-center"><button style="overflow: hidden;" type="submit" id="btn" class="btn btn-block btn-color text-color">Send Message</button></div>

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

  <script type="text/javascript">
$(document).ready(function(){

    var datanum1=Math.floor(Math.random() * 11)+1;
    var datanum2=Math.floor(Math.random() * 11)+1;
  $('#num1').val(datanum1);
  $('#num2').val(datanum2);
  $('#myResult').on('keyup',function(){

    var getdata=$(this).val();
    var total = datanum1 + datanum2;
    
    
    if (getdata == total) {
      $('#myResult').removeClass('addcol1');
         $('#btn').on('click',function(){
         $('#myResult').val(getdata);
    
      });
    }
    else{
       $('#myResult').addClass('addcol1');
       $('#myResult').attr('required', true);

       $('#btn').on('click',function(){
         $('#myResult').val('');
    
        });
    }
  });
  $('#notrobot').css({'display':'none'});
  $('#eshow').on('keyup', function(){
      var eshow= $('#eshow').val();
        if (eshow.length>0) {
          $('#notrobot').css({'display':'block'});
    console.log(eshow);
  }
  else{
     $('#notrobot').css({'display':'none'});
  }
  });

});
</script>
    @include('include.footer')

@endsection