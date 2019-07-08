<!DOCTYPE html>

<html>

<head> 

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{asset('asseter/img/golf(icon).png')}}" type="image/x-icon" />

    <title>@yield('title') | {{Config('app.title')}}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/AdminLTE.min.css') }}"> 

    <link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/font-awesome.min.css') }}"> 

    <link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/daterangepicker.css') }}">  

    <link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/ionicons.min.css') }}"> 

    <link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/admin.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/jquery.dataTables.min.css') }}">

    

    <script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery-ui.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('adminlte/js/lib/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('adminlte/js/lib/daterangepicker.js') }}"></script>

    <script type="text/javascript" src="{{ asset('adminlte/js/lib/adminlte.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.tinymce.min.js')}}"></script>

    <!-- script editing -->

    <script type="text/javascript" src="{{asset('adminlte/js/delController.js')}}"></script>

    <script type="text/javascript" src="{{asset('adminlte/js/admin.js')}}"></script>
   

</head>

<body>
 @if(\Auth::User()->isOnline())

    <?php $today  = new DateTime('now', new DateTimeZone('Asia/bangkok'));
          $ft     =  $today->format('y-m-d H:i:s ');

            $add_active              =  \App\User::find(\Auth::User()->id);
            $add_active->updated_at  =  date('Y-m-d h:i:s' );
            $add_active->last_active =  $ft;
            $add_active->save();  
    ?>
  @endif

    @yield('content')
<a href="#" class="back-to-top" style=""><i class="fa fa-chevron-up"></i></a>

     <script type="text/javascript">

       $(document).ready(function(){
              $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').css({'display':'block'});
    } else {
      $('.back-to-top').css({'display':' none'});
    }
  });
  $('.back-to-top').click(function(){
  $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    });
   });

     </script>

</body>

</html>