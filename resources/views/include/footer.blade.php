
  <!--==========================

    Footer

  ============================-->

  <div class="intro-container">
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="/">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">DESTINATIONS</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{route('getgolf_courses')}}">GOLF COURSES</a></li>
              <li ><i class="ion-ios-arrow-right"></i> <a href="{{route('gettp')}}">GOLF TOURS & PACKAGES</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{route('gethotel_resorts')}}">HOTELS & RESORTS</a></li>
              <li><i class="ion-ios-arrow-right"></i><a href="{{route('getContact')}}">CONTACT</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Anawrahtar Road,Pazundaung Township,Yangon 11171,Myanmar (Burma)<br>
              <strong>Phone:</strong> +95 (9) 401 533 484 <br>
              <strong>Email:</strong> info@asiagolftravel.com<br>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>       
            <p>Enter your email to get news udpate</p>
            @if (session('message'))
              <script type="text/javascript"> alert('{{ session("message")}}');</script>
            @endif
            <form action="{{route('subscribe')}}" method="post">           
             {{csrf_field() }}
              <input type="hidden" name="subscribe" value="subscriber">
                <input  name="email" type="email" placeholder="example@gmail.com" aria-label="email" required="">
              <input type="submit"  value="Subscribe" >
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright 2019 <strong>Asia Golf Travel</strong>
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- #footer -->



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <div id="preloader"></div>

</div>

<script src="{{asset('asseter/lib/jquery/jquery.min.js')}}"></script>

  <script src="{{asset('asseter/lib/jquery/jquery-migrate.min.js')}}"></script>

  <script src="{{asset('asseter/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('asseter/lib/easing/easing.min.js')}}"></script>

  <script src="{{asset('asseter/lib/superfish/hoverIntent.js')}}"></script>

  <script src="{{asset('asseter/lib/superfish/superfish.min.js')}}"></script>

  <script src="{{asset('asseter/lib/wow/wow.min.js')}}"></script>

  <script src="{{asset('asseter/lib/waypoints/waypoints.min.js')}}"></script>

  <script src="{{asset('asseter/lib/counterup/counterup.min.js')}}"></script>

  <script src="{{asset('asseter/lib/owlcarousel/owl.carousel.min.js')}}"></script>

  <script src="{{asset('asseter/lib/isotope/isotope.pkgd.min.js')}}"></script>

  <script src="{{asset('asseter/lib/lightbox/js/lightbox.min.js')}}"></script>

  <script src="{{asset('asseter/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->

  <script src="{{asset('asseter/contactform/contactform.js')}}"></script>



  <!-- Template Main Javascript File -->

  <script src="{{asset('asseter/js/main.min.js')}}"></script>



   