<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">        
  <title>@yield('title') | {{config('app.title')}}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicons -->
 <!-- Favicons -->
  <link href="{{asset('asseter/img/golf(icon).png')}}" rel="icon">
  <link href="{{asset('asseter/img/golf(icon).png')}}" rel="apple-touch-icon">



  <script  src="{{asset('asseter/lib/jquery/jquery.min.js')}}"></script>

  <link href="{{asset('asseter/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('asseter/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('asseter/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('asseter/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('asseter/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('asseter/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('asseter/css/style.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/gofont.min.css')}}" rel="stylesheet">

  

    <script type="text/javascript" src="{{asset('js/script.min.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('js/script.js')}}"></script> -->
     <script type="text/javascript">
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});</script>

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
    <!-- JavaScript Libraries -->

  
</head>
<body>

  @yield('content')


  
  </body>

</html>

  
