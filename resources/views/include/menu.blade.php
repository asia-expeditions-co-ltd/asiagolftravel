
      <div class="header"> 
         <div class="txttop">
             <i class="fa fa-phone"></i>&nbsp; +95 (9) 401 533 484
             <i class="fa fa-envelope-o"></i>&nbsp; info@asiagolftravel.com 
         </div> 
      </div>
<header id="header">
  
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="/" class="scrollto"> <img src="{{asset('asseter/img/ASIAGOLFTRAVEL-ORG.png')}}" style=" height: 60px; "></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
   <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li class="home"><a  href="/">Home</a></li>
          
            <li class="menu-has-children"><a href="#">DESTINATIONS</a>
              <ul>
                @foreach(\App\Country::getdes_all() as $pro)  
                <li>
                  <a href="{{route('getDest')}}?location={{$pro->id}}">{{ $pro->country_name }}</a>
                </li>
                  @endforeach
              </ul>
            </li>
            <li class="Courses"><a href="{{route('getgolf_courses')}}">GOLF COURSES</a></li>
            <li class="tours"><a href="{{route('gettp')}}"> TOURS & GOLF PACKAGES</a></li>
            <li class="hotel"><a href="{{route('gethotel_resorts')}}">HOTELS & RESORTS</a></li>

            <li class="Contact" ><a  href="{{route('getContact')}}" >Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->



