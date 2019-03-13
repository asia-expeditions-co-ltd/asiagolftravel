@extends('layout.backend')

@section('mailing', 'active')

@section('title', 'Users List')

@section('content')
    <style type="text/css">  
    body { font-family: "Open Sans",sans-serif;}

        .ReadMsgBody {width: 100%; background-color: #f1f1f1;}
        .ExternalClass {width: 100%; background-color: #f1f1f1;
        }
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#search {
  float: left;
  border-box: box-sizing;
  background-image: url('../img/searchicon.png');
  background-position: 10px 8px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#search:focus {
  outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  /*display: inline-block;*/
}

.dropdown-content {
     display: block;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    overflow-y: scroll;
    border: 1px solid #ddd;
    z-index: 1;
    max-height: 390px;

}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;

    /*position: absolute;*/
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

        td a {color: #ffcccc;text-decoration: none;font-weight: normal;font-style: normal;
        }
        table {border-collapse: collapse;}
        @media only screen and (max-width: 599px) {
            body {width: auto !important;
            }
            table table { width: 100% !important;
            }
            td.paddingOuter {
                width: 100% !important;
                padding-right: 20px !important;
                padding-left: 20px !important;
            }
            td.fullWidth {
                width: 100% !important;
                display: block !important;
                float: left;
                margin-bottom: 30px !important;
            }
            td.fullWidthNM {
                width: 100% !important;
                display: block !important;
                float: left;
                margin-bottom: 0px !important;
            }
            td.center {text-align: center !important;
            }
            td.right {text-align: right !important;
            }
            td.spacer {display: none !important;
            }
            img.scaleImg {
                width: 100% !important;
                height: auto;
            }
        }

.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color:;
  max-height: 20px;
}

.flex-container > span {
  padding: 0px 5px;
  border-radius: 7px;
  cursor: move;
  background-color: #f1f1f1;
  color: #1a1a1b;
  margin: 3px;
  text-align: center;
/*  line-height: 50px*/;
  font-size: 13px;
  border: solid 1px #5d77f5;
}
.flex-container > span:hover {
    color: #000;
    background-color: #d2cfcf;
}
span i{
  padding: 0 0 0 3px;
    font-weight: 500;
    font-size: 12px;
    cursor: pointer;
}
span i:hover{
  color: red;
  
}
    </style>

<!-- for image logo and path of image -->
    @if($getwebname     =='asiagolftravel')
      <?php $dataimg      = 'http://asiagolftravel.com/asseter/img/ASIAGOLFTRAVEL-ORG.png';?>
      <?php $datapath     = 'http://asiagolftravel.com/photos/share/thumbs/';?>
      <?php $datalink     = 'http://asiagolftravel.com/golf-details/';?>

    @elseif($getwebname =='takemetoburma')
      <?php $dataimg      = 'http://takemetoburma.com/img/demo-logotake.png';?>
      <?php $datapath     = 'http://takemetoburma.com/photos/share/thumbs/';?>
      <?php $datalink     = 'http://takemetoburma.com/myanmar-tour/';?>

    @elseif($getwebname =='cyclingburma')
      <?php $dataimg      = 'http://cyclingburma.com/img/cyclingburmar.png';?>
      <?php $datapath     = 'http://takemetoburma.com/photos/share/thumbs/';?>
      <?php $datalink     = 'http://cyclingburma.com/myanmar-tour/';?>

    @elseif($getwebname =='golftravelmyanmar')
      <?php $dataimg      = 'http://www.golftravelmyanmar.com/img/golfttravelmanmar(logo).png';?>
      <?php $datapath     = 'http://takemetoburma.com/photos/share/thumbs/';?>
      <?php $datalink     = 'http://golftravelmyanmar.com/myanmar-tour/';?>
    
    @elseif($getwebname =='asia_expeditions')
      <?php $dataimg      = 'https://www.asia-expeditions.com/img/asia-expeditions.png';?>
      <?php $datapath     = 'https://www.asia-expeditions.com/photos/shares/thumbs/';?>
      <?php $datalink     = 'https://www.asia-expeditions.com/tour/';?>
    @endif
<!-- for select website -->

<!-- -->


<div class="wrapper">
 <?php use App\component\Content;?>
    @include('admin.include.header')

    @include('admin.include.leftMenu')
    <div class="content-wrapper">       

        <section class="content">
@include('admin.include.message')

            <form action="" method="get">
                <div class="col-lg-2 col-md-2 col-xs-12"></div>
                <div class="form-group row" style="margin: 0 0 10px 0">                
                <div class="col-lg-4 col-md-4 col-xs-12">
                  <label>select country</label>
            <select class="form-control"   name="myselect" id="myselect" onchange="this.form.submit()">

                @if(isset($getcont)? $getcont: '')

                    <option value="{{$getcont->id}}" >{{$getcont->country_name}}</option>
                    @endif
                      @foreach(\App\Country::whereNotIn('id', [isset($getcont->id)? $getcont->id:''])->orderBy('country_name', 'DESC')->get() as $pro) 
            
            <option value="{{$pro->id}}" data-id="{{$pro->id}}">{{ $pro->country_name }}</option>
                @endforeach
              
            </select>
            </div>
      
     
          
                <div class="col-lg-4 col-md-4 col-xs-12">
               <label>select website</label>
                <select class="form-control"   name="selectweb" id="selectweb" onchange="this.form.submit()" >
                   <option value="asiagolftravel">asiagolftravel.com </option>
                   <option value="takemetoburma">takemetoburma.com </option>
                   <option value="cyclingburma">cyclingburma.com </option>
                   <option value="golftravelmyanmar">golftravelmyanmar.com </option>  
                   <option value="asia_expeditions">asia-expeditions.com </option>  
       
              
                </select>
        
            </div>
         </div>
            <div class="col-lg-2 col-md-2 col-xs-12"></div>
          </form>
             <div style="padding: 1px">
               
             </div>
            
<!-- hi/ -->
<form action="{{route('mail_send')}}" method="post" class="" >
        {{csrf_field()}} 
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div> 
        <div class="form-group row" style="margin: 0">
          
      
<div  class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div id="scrolling" style="/*margin-top: -40px;*/ border-radius: 4px;overflow-y: scroll;border: 1px solid #9e9e9e75; width: 100% ; height: 80px; background-color: #ffff; float: right;">
          <div id="divremove"  class="flex-container" >
                            <!-- for add new and remove -->
          </div>
        </div>
      <input type="hidden" name="getwebname" value="{{$getwebname}}">
     <input type="submit" class="btn btn-primary" value="Send" style="width: 30%">
     <input class="form-control"  type="text" placeholder="Search.." id="search" name="search" autocomplete="off" style="width: 70%;"  >
      <div class="dropdown">
            <div id="myDropdown" class="dropdown-content " style=" width: 85.5%;">
           
               <div id="addnew"   >
               </div>
            </div>
      </div>
    </div>
  </div>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>


             <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#eee7e7" style="padding: 0; margin: 0; ">
        <tr>
            <td align="center" width="700" valign="top" style="background-color:#eee;">

  +95 (1) 200 401 / (9) 506 2644 || info [at] asiagolftravel.com

             <!--Header-->
                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0; background-color: #ffff ">
                    <tr>

                        <td class="paddingOuter" valign="top" align="center" style="  padding: 0px 0px;">

                            <table class="tableWrap" width="700" border="0" align="center" cellpadding="0" cellspacing="0" style="background-color:rgba(173, 173, 173, 0.7);">

                                <tr>
                                    <td style="padding: 0px;">
                                        <table class="tableInner" width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <!-- Positioning of logo -->
                                                <td class="fullWidth" width="305" align="center" valign="top" style="padding: 0;">
                                                    <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td class="center" align="center" valign="top" style=" margin: 0; padding-bottom: 0; font-size:14px; font-weight: normal; color:#949494; font-family: Garamond, Baskerville, 'Baskerville Old Face', 'Hoefler Text', 'Times New Roman', serif; line-height: 100%; ">
                                                                <span>
                                                            <a href="#" style="text-decoration: none; font-style: normal; font-weight: normal; color:#ffffff;">

                                                            <img src="{{$dataimg}}" alt="logo" width="286" height="50" border="0" style="display: inline-block;    height: 130px;" />
                                                       
                                                            </a>
                                                            </span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <!--Logo end-->

                                                <!--Spacer-->
                                                <td class="spacer" width="30" height="0" align="left" valign="top" style="font-size: 0; line-height: 0;">
                                                    &nbsp;
                                                </td>
                                                <!--Spacer end-->

                                        
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!--Header end-->
      
             
         
                @php 
$filtered0 = $webs->where('web', 1);
$filtered1 = $webs->where('type', 1);
$filtered2 = $webs->where('type', 2);
$filtered3 = $webs->where('type', 3);
                   @endphp
                     <!-- 0 column -->
            
                 <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0;text-align: center;">
                          <!-- Spacer -->
                                <tr>
                                    <td height="20" style="padding:0; line-height: 0;">
                                        &nbsp;
                                    </td>
                                </tr>
                                <!-- Spacer End -->
                    <tr>
                         <td style="background-color: #1515a2; padding: 0; color: #ffff;font-size: 12px;">
                            @if($filtered0->first())
                                            <img src="http://asiagolftravel.com/img/hotel&resort.png" style="
    float: left;
    padding: 5px;
    inline-size: 55px;">
                            <h3>TOP TOURS</h3>
                            @endif

  
                        </td>
                       
                    </tr>
                </table>

              <!-- 3 column products-->
                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0;  ">
                    <tr>
                        
                 
                          <td class="paddingOuter" valign="top" align="center"  style="background-color: #ffff;">


                          @foreach($filtered0->chunk(3) as $key => $chunkTour)
                            <table class="tableWrap" width="640" border="0" align="center" cellpadding="0" cellspacing="0" style="">
                                <tr>
                                    <td style="padding: 0px;">

  
                                        <table class="tableInner" width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
    
                             
       
       

                 @foreach($chunkTour as $tour)
          


             
                    <!--Spacer-->
                                                <td class="spacer" width="5" height="0" align="left" valign="top" style="font-size: 0; line-height: 0;">
                                                    &nbsp;
                                                </td>
                                                <!--Spacer end-->
<!--==========================================================Left product0-->

                                                <td class="fullWidth"  width="193" align="left" valign="top" style="padding: 10px 0 0 0;">
                                                    <table data-id="{{$tour->id}}" id="{{$tour->id}}" class="mych" width="100%" align="left" border="0" cellpadding="0" cellspacing="0">

                                                        <tr>

                                                            <td align="left">
                                                                <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border: 1px solid #dedede;">
    <input hidden="" type="checkbox" name="checkall[]" id="checkall" value="{{$tour->id}}">                                             
                                                                    <!--Image section-->
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 15px; font-size:14px ; font-weight: normal; color:#949494; font-family: 'Poppins', Helvetica, Arial, sans-serif; line-height: 0;">
                                 
                                      <img class="scaleImg" src="{{$datapath}}{{$tour->tour_photo}}" alt="sofa" width="100%" height="auto" style="display: block;" />
                                
                                    </span>
                                                                        </td>
                                                                    </tr>
                                                                    <!--Image section end-->
                                                                    <tr>
                                                                        <td align="center" style="padding: 0px;">
                                                                            <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                                                                <!--Title-->
                                                                                <tr>
                                                                                    <td align="center" valign="top" style="margin: 0; border-bottom: 1px solid #dedede; padding-bottom: 10px; font-size:16px ; font-weight: normal; color:#3a3a3a; font-family: Lato, Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 28px;  mso-line-height-rule: exactly;">
                                                                                        <span>
                                                                                        
                                                                          {{$tour->province_name }}
   {{isset($tour->tour_price)? '$'.$tour->tour_price: ''}}                                                                         
                                                                                    </span>
                                                                                    </td>
                                                                                </tr>
                                                                                <!--Title end-->


                                                                                <tr>
                                                                                    <td align="center" valign="top" style="margin: 0; padding: 15px 0px 5px 0px; font-size:14px; font-weight: normal; color:#333;  font-family: Lato, Helvetica Neue, Helvetica, Arial, serif; line-height: 24px;  mso-line-height-rule: exactly;">
                                                                                        <span>
 <p style="overflow: hidden; height: 60px;font-size: 14px;margin: 0px;">{{$tour->title}}</p>

                                                                                    </span>
                                                                                    </td>
                                                                                </tr>

                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>


                                                        <!-- Button-->
                                                        <tr>
                                                            <td align="center" bgcolor="#ffcccc" style="padding: 8px 20px; background-color: #18d26e">
                                                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 0; text-transform: uppercase; font-size:14px; font-weight: 500; color:#FFFFFF; font-family:  Lato, Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 23px;  mso-line-height-rule: exactly;">
                                                                            <span>
                                    <a target="_blank" href="{{$datalink}}{{$tour->slug}}" style="text-decoration: none; font-style: normal; font-weight: 500; color:black;">
                                    View Details
                                    </a>
                                    </span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <!-- Button-->
                                                    </table>
                                                </td>

                             
                                         
<!--===============================================================Left product end-->

                                                <!--Spacer-->
                                                <td class="spacer" width="5" height="0" align="left" valign="top" style="font-size: 0; line-height: 0;">
                                                    &nbsp;
                                                </td>
                                                <!--Spacer end-->
        @endforeach
                  
                                        

 
                                            </tr>
                                        </table>

                                    </td>
                                </tr>

                                <!-- Spacer -->
                                <tr>
                                    <td height="20" style="padding:0; line-height: 0;">
                                        &nbsp;
                                    </td>
                                </tr>
                                <!-- Spacer End -->

                            </table>
                           
                                   @endforeach
                        </td>
                    
                        
                    </tr>
                </table>
                      
                   

                <!-- 0 column end-->
                    <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0;text-align: center;">
                               <!-- Spacer -->
                                <tr>
                                    <td height="20" style="padding:0; line-height: 0;">
                                        &nbsp;
                                    </td>
                                </tr>
                                <!-- Spacer End -->
                    <tr>
                       
                        <td style="background-color: #1515a2; padding: 0; color: #ffff;font-size: 12px;">
                            @if($filtered1->first())
                                  <img src="http://asiagolftravel.com/img/gofl&tours.png" style="
    float: left;
    padding: 5px;
    inline-size:55px;
">
                            <h3>TOP TOURS AND GOLF PACKAGE</h3>
                            @endif
  
                        </td>
                       
                    </tr>
                </table>

              <!-- 1 column products-->
                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0;  ">
                   
                    <tr>
                        
                 
                        <td class="paddingOuter" valign="top" align="center"  style="background-color: #ffff;">


                          @foreach($filtered1->chunk(3) as $key => $chunkTour)
                            <table class="tableWrap" width="640" border="0" align="center" cellpadding="0" cellspacing="0" style="">
                                <tr>
                                    <td style="padding: 0px;">  
                                        <table class="tableInner" width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr> 
                            
                    @foreach($chunkTour as $tour)
          


             
                    <!--Spacer-->
                                                <td class="spacer" width="5" height="0" align="left" valign="top" style="font-size: 0; line-height: 0;">
                                                    &nbsp;
                                                </td>
                                                <!--Spacer end-->
<!--==========================================================Left product-->

                                                <td class="fullWidth"  width="193" align="left" valign="top" style="padding: 10px 0 0 0;">
                                                    <table data-id="{{$tour->id}}" id="{{$tour->id}}" class="mych" width="100%" align="left" border="0" cellpadding="0" cellspacing="0">

                                                        <tr>

                                                            <td align="left">
                                                                <table  width="100%" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border: 1px solid #dedede;">

 <input hidden="" type="checkbox" name="checkall[]" class="{{$tour->id}}" value="{{$tour->id}}">
                                                                    <!--Image section-->
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 15px; font-size:14px ; font-weight: normal; color:#949494; font-family: 'Poppins', Helvetica, Arial, sans-serif; line-height: 0;">
                                                                            <span>
                                     
                                      <img class="scaleImg" src="{{$datapath}}{{($tour->photo)}}" alt="sofa" width="100%" height="auto" style="display: block;" />
                                      
                                    </span>
                                                                        </td>
                                                                    </tr>
                                                                    <!--Image section end-->
                                                                    <tr>
                                                                        <td align="center" style="padding: 0px;">
                                                                            <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                                                                <!--Title-->
                                                                                <tr>
                                                                                    <td align="center" valign="top" style="margin: 0; border-bottom: 1px solid #dedede; padding-bottom: 10px; font-size:16px ; font-weight: normal; color:#3a3a3a; font-family: Lato, Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 28px;  mso-line-height-rule: exactly;">
                                                                                        <span>
                                                                                       
                                                              {{$tour->province_name }}
{{isset($tour->tour_price)? '$'.$tour->tour_price: ''}}
                                                                                       
                                                                                    </span>
                                                                                    </td>
                                                                                </tr>
                                                                                <!--Title end-->


                                                                                <tr>
                                                                                    <td align="center" valign="top" style="margin: 0; padding: 15px 0px 5px 0px; font-size:14px; font-weight: normal; color:#333;  font-family: Lato, Helvetica Neue, Helvetica, Arial, serif; line-height: 24px;  mso-line-height-rule: exactly;">
                                                                                        <span>
 <p style="overflow: hidden; height: 60px;font-size: 14px;margin: 0px;">{{$tour->title}}</p>

                                                                                    </span>
                                                                                    </td>
                                                                                </tr>

                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>


                                                        <!-- Button-->
                                                        <tr>
                                                            <td align="center" bgcolor="#ffcccc" style="padding: 8px 20px; background-color: #18d26e">
                                                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 0; text-transform: uppercase; font-size:14px; font-weight: 500; color:#FFFFFF; font-family:  Lato, Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 23px;  mso-line-height-rule: exactly;">
                                                                            <span>
                                    <a  target="_blank" href="{{$datalink}}{{$tour->slug}}" style="text-decoration: none; font-style: normal; font-weight: 500; color:black;">
                                    View Details
                                    </a><!-- ////////// -->
                                    </span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <!-- Button-->
                                                    </table>
                                                </td>

                             
                                         
<!--===============================================================Left product end-->

                                                <!--Spacer-->
                                                <td class="spacer" width="5" height="0" align="left" valign="top" style="font-size: 0; line-height: 0;">
                                                    &nbsp;
                                                </td>
                                                <!--Spacer end-->
        @endforeach
                  
                                        

 
                                            </tr>
                                        </table>

                                    </td>
                                </tr>

                                <!-- Spacer -->
                                <tr>
                                    <td height="20" style="padding:0; line-height: 0;">
                                        &nbsp;
                                    </td>
                                </tr>
                                <!-- Spacer End -->

                            </table>
                           
                                   @endforeach
                        </td>
                    
                        
                    </tr>
                </table>
                      
                 

                <!-- 1 column end-->
                  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0;text-align: center;">
                          <!-- Spacer -->
                                <tr>
                                    <td height="20" style="padding:0; line-height: 0;">
                                        &nbsp;
                                    </td>
                                </tr>
                                <!-- Spacer End -->
                    <tr>
                         <td style="background-color: #1515a2; padding: 0; color: #ffff;font-size: 12px;">
                           @if($filtered2->first())
                                 <img src="http://asiagolftravel.com/img/golfcourse.png" style="
    float: left;
    padding: 5px;
    inline-size: 55px;">
                            <h3>GOLF COURSES</h3>
                           @endif

  
                        </td>
                       
                    </tr>
                </table>

              <!-- 2 column products-->
                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0;  ">
                    <tr>
                        
                 
                         <td class="paddingOuter" valign="top" align="center"  style="background-color: #ffff;">


                          @foreach($filtered2->chunk(3) as $key => $chunkTour)
                            <table class="tableWrap" width="640" border="0" align="center" cellpadding="0" cellspacing="0" style="">
                                <tr>
                                    <td style="padding: 0px;">

  
                                        <table class="tableInner" width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
    
                             
       
       

                 @foreach($chunkTour as $tour)
          


             
                    <!--Spacer-->
                                                <td class="spacer" width="5" height="0" align="left" valign="top" style="font-size: 0; line-height: 0;">
                                                    &nbsp;
                                                </td>
                                                <!--Spacer end-->
<!--==========================================================Left product-->

                                                <td class="fullWidth"  width="193" align="left" valign="top" style="padding: 10px 0 0 0;">
                                                    <table data-id="{{$tour->id}}" id="{{$tour->id}}" class="mych" width="100%" align="left" border="0" cellpadding="0" cellspacing="0">

                                                        <tr>

                                                            <td align="left">
                                                                <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border: 1px solid #dedede;">
 <input hidden="" type="checkbox" name="checkall[]" class="{{$tour->id}}" id="aa" value="{{$tour->id}}">
                                                                    
                                                                    <!--Image section-->
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 15px; font-size:14px ; font-weight: normal; color:#949494; font-family: 'Poppins', Helvetica, Arial, sans-serif; line-height: 0;">
                                                                            <span>
                                      
                                      <img class="scaleImg" src="{{$datapath }}{{($tour->photo)}}" alt="sofa" width="100%" height="auto" style="display: block;" />
                                  
                                    </span>
                                                                        </td>
                                                                    </tr>
                                                                    <!--Image section end-->
                                                                    <tr>
                                                                        <td align="center" style="padding: 0px;">
                                                                            <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                                                                <!--Title-->
                                                                                <tr>
                                                                                    <td align="center" valign="top" style="margin: 0; border-bottom: 1px solid #dedede; padding-bottom: 10px; font-size:16px ; font-weight: normal; color:#3a3a3a; font-family: Lato, Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 28px;  mso-line-height-rule: exactly;">
                                                                                        <span>
                                                                                      
                                                                                        {{$tour->province_name }}
{{isset($tour->tour_price)? '$'.$tour->tour_price: ''}}
                                                                                     
                                                                                    </span>
                                                                                    </td>
                                                                                </tr>
                                                                                <!--Title end-->


                                                                                <tr>
                                                                                    <td align="center" valign="top" style="margin: 0; padding: 15px 0px 5px 0px; font-size:14px; font-weight: normal; color:#333;  font-family: Lato, Helvetica Neue, Helvetica, Arial, serif; line-height: 24px;  mso-line-height-rule: exactly;">
                                                                                        <span>
 <p style="overflow: hidden; height: 60px;font-size: 14px;margin: 0px;">{{$tour->title}}</p>

                                                                                    </span>
                                                                                    </td>
                                                                                </tr>

                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>


                                                        <!-- Button-->
                                                        <tr>
                                                            <td align="center" bgcolor="#ffcccc" style="padding: 8px 20px; background-color: #18d26e">
                                                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 0; text-transform: uppercase; font-size:14px; font-weight: 500; color:#FFFFFF; font-family:  Lato, Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 23px;  mso-line-height-rule: exactly;">
                                                                            <span>
                                    <a target="_blank" href="{{route('tourDetails', ['url'=> $tour->slug])}}" style="text-decoration: none; font-style: normal; font-weight: 500; color:black;">
                                    View Details
                                    </a>
                                    </span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <!-- Button-->
                                                    </table>
                                                </td>

                             
                                         
<!--===============================================================Left product end-->

                                                <!--Spacer-->
                                                <td class="spacer" width="5" height="0" align="left" valign="top" style="font-size: 0; line-height: 0;">
                                                    &nbsp;
                                                </td>
                                                <!--Spacer end-->
        @endforeach
                  
                                        

 
                                            </tr>
                                        </table>

                                    </td>
                                </tr>

                                <!-- Spacer -->
                                <tr>
                                    <td height="20" style="padding:0; line-height: 0;">
                                        &nbsp;
                                    </td>
                                </tr>
                                <!-- Spacer End -->

                            </table>
                           
                                   @endforeach
                        </td>
                    
                        
                    </tr>
                </table>
                      
                   

                <!-- 3 column end-->
            
                 <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0;text-align: center;">
                          <!-- Spacer -->
                                <tr>
                                    <td height="20" style="padding:0; line-height: 0;">
                                        &nbsp;
                                    </td>
                                </tr>
                                <!-- Spacer End -->
                    <tr>
                         <td style="background-color: #1515a2; padding: 0; color: #ffff;font-size: 12px;">
                            @if($filtered3->first())
                                            <img src="http://asiagolftravel.com/img/hotel&resort.png" style="
    float: left;
    padding: 5px;
    inline-size: 55px;">
                            <h3>HOTELS AND RESORTS</h3>
                            @endif

  
                        </td>
                       
                    </tr>
                </table>

              <!-- 3 column products-->
                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0;  ">
                    <tr>
                        
                 
                          <td class="paddingOuter" valign="top" align="center"  style="background-color: #ffff;">


                          @foreach($filtered3->chunk(3) as $key => $chunkTour)
                            <table class="tableWrap" width="640" border="0" align="center" cellpadding="0" cellspacing="0" style="">
                                <tr>
                                    <td style="padding: 0px;">

  
                                        <table class="tableInner" width="640" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
    
                             
       
       

                 @foreach($chunkTour as $tour)
          


             
                    <!--Spacer-->
                                                <td class="spacer" width="5" height="0" align="left" valign="top" style="font-size: 0; line-height: 0;">
                                                    &nbsp;
                                                </td>
                                                <!--Spacer end-->
<!--==========================================================Left product-->

                                                <td class="fullWidth"  width="193" align="left" valign="top" style="padding: 10px 0 0 0;">
                                                    <table data-id="{{$tour->id}}" id="{{$tour->id}}" class="mych" width="100%" align="left" border="0" cellpadding="0" cellspacing="0">

                                                        <tr>

                                                            <td align="left">
                                                                <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border: 1px solid #dedede;">
    <input hidden="" type="checkbox" name="checkall[]" id="checkall" value="{{$tour->id}}">                                             
                                                                    <!--Image section-->
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 15px; font-size:14px ; font-weight: normal; color:#949494; font-family: 'Poppins', Helvetica, Arial, sans-serif; line-height: 0;">
                                 
                                      <img class="scaleImg" src="{{$datapath }}{{$tour->photo}}" alt="sofa" width="100%" height="auto" style="display: block;" />
                                
                                    </span>
                                                                        </td>
                                                                    </tr>
                                                                    <!--Image section end-->
                                                                    <tr>
                                                                        <td align="center" style="padding: 0px;">
                                                                            <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">
                                                                                <!--Title-->
                                                                                <tr>
                                                                                    <td align="center" valign="top" style="margin: 0; border-bottom: 1px solid #dedede; padding-bottom: 10px; font-size:16px ; font-weight: normal; color:#3a3a3a; font-family: Lato, Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 28px;  mso-line-height-rule: exactly;">
                                                                                        <span>
                                                                                        
                                                                  {{$tour->province_name  }}
   {{isset($tour->tour_price)? '$'.$tour->tour_price: ''}}                                                                         
                                                                                    </span>
                                                                                    </td>
                                                                                </tr>
                                                                                <!--Title end-->


                                                                                <tr>
                                                                                    <td align="center" valign="top" style="margin: 0; padding: 15px 0px 5px 0px; font-size:14px; font-weight: normal; color:#333;  font-family: Lato, Helvetica Neue, Helvetica, Arial, serif; line-height: 24px;  mso-line-height-rule: exactly;">
                                                                                        <span>
 <p style="overflow: hidden; height: 60px;font-size: 14px;margin: 0px;">{{$tour->title}}</p>

                                                                                    </span>
                                                                                    </td>
                                                                                </tr>

                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>


                                                        <!-- Button-->
                                                        <tr>
                                                            <td align="center" bgcolor="#ffcccc" style="padding: 8px 20px; background-color: #18d26e">
                                                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 0; text-transform: uppercase; font-size:14px; font-weight: 500; color:#FFFFFF; font-family:  Lato, Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 23px;  mso-line-height-rule: exactly;">
                                                                            <span>
                                    <a target="_blank" href="{{route('tourDetails', ['url'=> $tour->slug])}}" style="text-decoration: none; font-style: normal; font-weight: 500; color:black;">
                                    View Details
                                    </a>
                                    </span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <!-- Button-->
                                                    </table>
                                                </td>

                             
                                         
<!--===============================================================Left product end-->

                                                <!--Spacer-->
                                                <td class="spacer" width="5" height="0" align="left" valign="top" style="font-size: 0; line-height: 0;">
                                                    &nbsp;
                                                </td>
                                                <!--Spacer end-->
        @endforeach
                  
                                        

 
                                            </tr>
                                        </table>

                                    </td>
                                </tr>

                                <!-- Spacer -->
                                <tr>
                                    <td height="20" style="padding:0; line-height: 0;">
                                        &nbsp;
                                    </td>
                                </tr>
                                <!-- Spacer End -->

                            </table>
                           
                                   @endforeach
                        </td>
                    
                        
                    </tr>
                </table>
                      
                   

                <!-- 3 column end-->
                      <!-- Footer-->
                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#3b3b3b" style="padding: 0; ">
                    <tr>
                        <td class="paddingOuter" valign="top" align="center" style="padding: 0px;background-color: rgba(173, 173, 173, 0.7);">
                            <table class="tableWrap" width="640" border="0" align="center" cellpadding="0" cellspacing="0" style="">
                                <tr>
                                    <td style=" padding: 40px 0px; border-bottom: 1px solid #585757;">
                                        <table class="tableInner" width="640" border="0" align="center" cellpadding="0" cellspacing="0" style="">
                                            <tr>
                                                <td class="fullWidth" width="640" align="center" valign="top" style="padding: 0;margin: 0; padding-top: 0; font-size:13px; font-weight: normal; color:#000; font-family: Garamond, Baskerville, 'Baskerville Old Face', 'Hoefler Text', 'Times New Roman', serif; line-height: 23px;  mso-line-height-rule: exactly; ">
                                                    <span>
                                                       &copy; Copyright 2019 <strong>Asia Golf Travel</strong>. All Rights Reserved                                                    <br />
                                                    <a href="" style="text-decoration: none; font-style: normal; font-weight: normal; color:#ffffff;">Unsubscribe 
                                                        </a>
                                                </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!-- Footer end-->

            </td></tr></table>
</form>

</section>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        
  $("#selectweb option[value={{$getwebname}}]").prop("selected", "selected");

    });
</script>


<script type="text/javascript">

  $('#selectweb').on('click', function(){
 $('#myDropdown #addnew').load('#myDropdown #addnew');
  });
 


    $('#search').on('keyup',function(){

var datam=[];
         for (var i = 0; i < localStorage.length; i++) {
              datam.push(localStorage.key(i));
       }
// console.log(datam);
 var cb = $('#selectweb').val();


 console.log(cb);

        $value=$(this).val();
        if ($value){ }
         else{
            $value = false;
          
         }
        $.ajax({
         
        type : 'get',
         
        url : '{{route("research")}}',
         
        data:{'search':$value, 'getemail': datam,'check':cb },
         
        success:function(data1){
         
        $('#myDropdown #addnew').html(data1);
         
        },
         error: function(){   
             return false;
            },
         
        });
    });


    $(document).on("click",".addemail", function(){
dataid = $(this).data('id');
$('#scrolling').animate({scrollTop:$(document).height()}, 1000);
  
       
            // console.log(noname);
           
        $('#divremove').append('<span data-id="'+dataid+'" id="'+dataid+'"><input id="email" type="hidden" name="noname[]" value="'+dataid+'">'+dataid+'<i data-id="'+dataid+'" class="fa fa-close"></i></span>');

           var entry = {
                     "ID": dataid,
                };
        localStorage.setItem(dataid, JSON.stringify(entry));

        }); 

        if (typeof(Storage) !== "undefined") {
            // Code for localStorage
              for (var i = 0; i < localStorage.length; i++) {
                $('#divremove').append('<span data-id="'+localStorage.key(i)+'" id="'+localStorage.key(i)+'"><input id="email" type="hidden" name="noname[]" value="'+localStorage.key(i)+'">'+localStorage.key(i)+'<i data-id="'+localStorage.key(i)+'" class="fa fa-close"></i></span>');
              }
        } else {
            // No web storage Support.
        }  
    
</script>

<script type="text/javascript">
    $(document).ready(function(){

             $(document).on("click", '#divremove span i', function(){
             data = $(this).data('id');
              // alert(data);
                var elem = document.getElementById(data);
                elem.parentNode.removeChild(elem);
                  // $(this).remove(); 
                  window.localStorage.removeItem(data); 

        });

          $(document).on("click", '#addnew a', function(){
              $(this).remove();
              // alert(data);
                // var elem = document.getElementById(data);
                // elem.parentNode.removeChild(elem);
    

        });

    });
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>


<script type="text/javascript">

$('#search').on('keyup',function(){
        $value=$(this).val();
        var  showmail = $.trim( $('#search').val());
    if ( showmail ==  $value+'' ){        
    }
    else{
         var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
     
         var comp = re.test($.trim( $('#search').val()));//conpare type email

            if (comp ) {

            var dataArray = [];
            $(document).find('input[id="email"]').each(function() {
                var data = {};
                data = this.value;
                dataArray.push(data);
            });

                if (dataArray.includes(showmail)){
                    alert('your email alreay');
                 }
                else{ 

                  $('#scrolling').animate({scrollTop:$(document).height()}, 1000); 

                   $('#divremove').append('<span data-id="'+showmail+'" id="'+showmail+'"><input id="email" type="hidden" name="noname[]" value="'+showmail+'">'+showmail+'<i data-id="'+showmail+'" class="fa fa-close"></i></span>');

                           var entry = {
                                     "ID": $value,
                                };
                localStorage.setItem($value, JSON.stringify(entry));//for add to logcalstorage

                }
              $('#search').val('');// for clear input by id 
            }
        // alert('input is blank');
    }
  
});

$("#search").on('keydown', function(e) {
       if (e.which == 13) {
         $("#search").trigger('click');
        return false;
    }
});

</script>



@if(session('mclear'))
<script type="text/javascript">
    $('#divremove span').remove();
    localStorage.clear();
</script>
@endif

<script type="text/javascript">

    $(document).on('click','.mych',function(){
     data = $(this).data('id');    
    

       var cb = $(this).find(':checkbox');
    if (cb.is(':checked')) {
       cb.prop('checked', false);
       $("#"+data).css({'margin': '0','box-shadow': 'rgba(52, 65, 218, 0.67) 0 0 0 0'});
    } else {
      cb.prop('checked', true);
       $("#"+data).css({'margin':'-3px 0px 0px 2px','box-shadow': 'rgba(52, 65, 218, 0.67) -4px 6px 5px 0px'});

    }
    console.log(cb.is(':checked'));

    });
</script>
@endsection

<!--  // var existingEntries = JSON.parse(localStorage.getItem("allEntries"));
 //        if(existingEntries == null) 
 //            existingEntries = [];
 //        var entry = {
 //             "ID": dataid,
 //        };
 //        // Save allEntries back to local storage
 //        existingEntries.push(entry);
 //        // var existingEntries = JSON.parse(localStorage.removeItem("allEntries"));
 //        localStorage.setItem("allEntries", JSON.stringify(existingEntries)); -->

<!--  <script type="text/javascript">
    $('#myselect').on('click',function(){
            $value=$(this).val();
      
if ($value) {}else{$value=false;}
           
         $.ajax({type : 'get',
            url : '{{route("mailing_con")}}',
        data:{'mailing':$value},
        success:function(data){            
        },
        error: function(){alert('error');   
             return false;
            },
        });});
 </script> -->