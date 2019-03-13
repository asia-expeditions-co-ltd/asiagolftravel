 <?php use App\component\Content;?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>test</title>
 
    <style type="text/css">  
    body { font-family: "Open Sans",sans-serif;}
        .ReadMsgBody {width: 100%; background-color: #f1f1f1;}
        .ExternalClass {width: 100%; background-color: #f1f1f1;
        }
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
    </style>

  </head>

  <body>
<?php $filtered0 = $data->where('web', 1);                   
$filtered1 = $data->where('type', 1);
$filtered2 = $data->where('type', 2);
$filtered3 = $data->where('type', 3); 

if ($data1=='asia_expeditions') {
    $dadaimg='https://www.asia-expeditions.com/img/asia-expeditions.png';
}
else{
    $dadaimg='http://asiagolftravel.com/asseter/img/ASIAGOLFTRAVEL-ORG.png';
}

?>


   
<div class="wrapper">

    <div class="content-wrapper">       

        <section class="content">

             <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#eee7e7" style="padding: 0; margin: 0;">
        <tr>
            <td align="center" width="700" valign="top" style="background-color:#eee;">
                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0;text-align: center;">
                    <tr>
                        <td style="background-color: #ffff; padding: 0;">
                            <h3 style="    font-size: 12px;
    height: 13px;
    background-color: #1515a2;
    padding: 0;
    margin: 0;
    color: white;">+95 (1) 200 401 / (9) 506 2644</h3>
                        </td>
                    </tr>
                </table>

           <!--Header-->
                <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0; background-color: #ffff ">
                    <tr>

                        <td class="paddingOuter" valign="top" align="center" style="  padding: 0px 0px;">

                            <table class="tableWrap" width="700" border="0" align="center" cellpadding="0" cellspacing="0" style="background-color:rgba(173, 173, 173, 0.7);;">

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

                                                            <img src="{{$dadaimg}}" alt="logo" width="286" height="50" border="0" style="display: inline-block;    height: 130px;" />
                                                       
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
                            <h1 style="color: #ffff; margin-right: 40px">TOP TOURS</h1>
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
                                                                    <!--Image section-->
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 15px; font-size:14px ; font-weight: normal; color:#949494; font-family: 'Poppins', Helvetica, Arial, sans-serif; line-height: 0;">
                                 
                                      <img class="scaleImg" src="https://www.asia-expeditions.com/photos/shares/thumbs/{{$tour->tour_photo}}" alt="sofa" width="100%" height="auto" style="display: block;" />
                                
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
 <p style="overflow: hidden; height: 60px;font-size: 14px;margin: 0px;">{{$tour->tour_name}}</p>

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
                                    <a target="_blank" href="https://www.asia-expeditions.com/tour/{{$tour->slug}}" style="text-decoration: none; font-style: normal; font-weight: 500; color:black;">
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
                            @if($filtered1->first())
                            <img src="http://asiagolftravel.com/img/gofl&tours.png" style="float: left;padding: 10px; height: 40px;">
                            <h1 style="color: #ffff; margin-right: 40px;">TOP TOURS AND GOLF PACKAGE</h1>
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

                                                <td class="fullWidth" width="193" align="left" valign="top" style="padding: 10px 0 0 0;">
                                                    <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">

                                                        <tr>
                                                            <td align="left">
                                                                <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border: 1px solid #dedede;">
                                                                    <!--Image section-->
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 15px; font-size:14px ; font-weight: normal; color:#949494; font-family: 'Poppins', Helvetica, Arial, sans-serif; line-height: 0;">
                                                                            <span>
                                      <a href="{{route('tourDetails', ['url'=> $tour->slug])}}" style="text-decoration: none; font-style: normal; font-weight: normal;">
                                      <img class="scaleImg" src="http://asiagolftravel.com/photos/share/thumbs/{{($tour->photo)}}" alt="sofa" width="100%" height="auto" style="display: block;" />
                                      </a>
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
                                                                                        <a href="{{route('tourDetails', ['url'=> $tour->slug])}}" style="text-decoration: none; font-style: normal; font-weight: normal; color:#18d26e;">
                                                    {{$tour->province->province_name  }}
{{isset($tour->tour_price)? '$'.$tour->tour_price: ''}}
                                                                                        </a>
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
                                    <a href="{{route('tourDetails', ['url'=> $tour->slug])}}" style="text-decoration: none; font-style: normal; font-weight: 500; color:black;">
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
                                      <!-- button more -->
                               @if($filtered1->first())
               
                  <table>
                      <tr>
                                                            <td align="center" bgcolor="#ffcccc" style="width: 50%;
    border-radius: 4px;
    padding: 8px 20px;
    background-color: #2196F3;">
                                                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 0; text-transform: uppercase; font-size:14px; font-weight: 500; color:#FFFFFF; font-family:  Lato, Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 23px;  mso-line-height-rule: exactly;">
                                                                            <span>
                                    <a  target="_blank" href="http://asiagolftravel.com/tour-packages" style="text-decoration: none; font-style: normal; font-weight: 500; color:black;">
                                    View More
                                    </a>
                                    </span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <!-- Button-->
                   </table>

                <!-- button more end -->
                      <!-- Spacer -->
                                <tr>
                                    <td height="20" style="padding:0; line-height: 0;">
                                        &nbsp;
                                    </td>
                                </tr>
                                <!-- Spacer End -->
                       @endif


                        </td>
                    
                        
                    </tr>

                </table>


                      
                   

                <!-- 1 column end-->
              <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0;text-align: center;">
                
                    <tr>
                         <td style="background-color: #1515a2; padding: 0; color: #ffff;font-size: 12px;">
                            @if($filtered2->first())

                             <img src="http://asiagolftravel.com/img/golfcourse.png" style="
    float: left;
    padding: 10px;
       height: 40px;">
                            <h1 style="color: #ffff; margin-right: 40px;">GOLF COURSES</h1>
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

                                                <td class="fullWidth" width="193" align="left" valign="top" style="padding: 10px 0 0 0;">
                                                    <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">

                                                        <tr>
                                                            <td align="left">
                                                                <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border: 1px solid #dedede;">
                                                                    <!--Image section-->
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 15px; font-size:14px ; font-weight: normal; color:#949494; font-family: 'Poppins', Helvetica, Arial, sans-serif; line-height: 0;">
                                                                            <span>
                                      <a href="{{route('tourDetails', ['url'=> $tour->slug])}}" style="text-decoration: none; font-style: normal; font-weight: normal;">
                                      <img class="scaleImg" src="http://asiagolftravel.com/photos/share/thumbs/{{($tour->photo)}}" alt="sofa" width="100%" height="auto" style="display: block;" />
                                      </a>
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
                                                                                        <a href="{{route('tourDetails', ['url'=> $tour->slug])}}" style="text-decoration: none; font-style: normal; font-weight: normal; color:#18d26e;">
                                                    {{$tour->province->province_name  }}
{{isset($tour->tour_price)? '$'.$tour->tour_price: ''}}
                                                                                        </a>
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
                                    <a href="{{route('tourDetails', ['url'=> $tour->slug])}}" style="text-decoration: none; font-style: normal; font-weight: 500; color:black;">
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

                                   @if($filtered2->first())
                                                   <!-- button more -->
                  <table>
                      <tr>
                                                            <td align="center" bgcolor="#ffcccc" style="width: 50%;
    border-radius: 4px;
    padding: 8px 20px;
    background-color: #2196F3;">
                                                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 0; text-transform: uppercase; font-size:14px; font-weight: 500; color:#FFFFFF; font-family:  Lato, Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 23px;  mso-line-height-rule: exactly;">
                                                                            <span>
                                    <a  target="_blank" href="http://asiagolftravel.com/golf_courses" style="text-decoration: none; font-style: normal; font-weight: 500; color:black;">
                                    View More
                                    </a>
                                    </span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <!-- Button-->
                   </table>

                <!-- button more end -->
                      <!-- Spacer -->
                                <tr>
                                    <td height="20" style="padding:0; line-height: 0;">
                                        &nbsp;
                                    </td>
                                </tr>
                                <!-- Spacer End -->
                           @endif

                        </td>
                    
                        
                    </tr>
                </table>
                      
                   

                <!-- 2 column end-->
             <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="padding: 0;text-align: center;">

                    <tr>
                        <td style="background-color: #1515a2; padding: 0; color: #ffff;font-size: 12px;">
                            @if($filtered3->first())
                      
                             <img src="http://asiagolftravel.com/img/hotel&resort.png" style="
    float: left;
    padding: 10px;
      height: 40px;">
                            <h1 style="color: #ffff; margin-right: 40px;">HOTELS AND RESORTS</h1>
                            @else
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

                                                <td class="fullWidth" width="193" align="left" valign="top" style="padding: 10px 0 0 0;">
                                                    <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0">

                                                        <tr>
                                                            <td align="left">
                                                                <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border: 1px solid #dedede;">
                                                                    <!--Image section-->
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 15px; font-size:14px ; font-weight: normal; color:#949494; font-family: 'Poppins', Helvetica, Arial, sans-serif; line-height: 0;">
                                                                            <span>
                                      <a href="{{route('tourDetails', ['url'=> $tour->slug])}}" style="text-decoration: none; font-style: normal; font-weight: normal;">
                                      <img class="scaleImg" src="http://asiagolftravel.com/photos/share/thumbs/{{($tour->photo)}}" alt="sofa" width="100%" height="auto" style="display: block;" />
                                      </a>
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
                                                                                        <a href="{{route('tourDetails', ['url'=> $tour->slug])}}" style="text-decoration: none; font-style: normal; font-weight: normal; color:#18d26e;">
                                                        {{$tour->province->province_name  }}
{{isset($tour->tour_price)? '$'.$tour->tour_price: ''}}
                                                                                        </a>
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
                                    <a href="{{route('tourDetails', ['url'=> $tour->slug])}}" style="text-decoration: none; font-style: normal; font-weight: 500; color:black;">
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

                                   @if($filtered3->first())

         
                                                   <!-- button more -->
                                                    <table>
                                                       <tr>
                                                            <td align="center" bgcolor="#ffcccc" style="width: 50%;
    border-radius: 4px;
    padding: 8px 20px;
    background-color: #2196F3;">
                                                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td align="center" valign="top" style="margin: 0; padding-bottom: 0; text-transform: uppercase; font-size:14px; font-weight: 500; color:#FFFFFF; font-family:  Lato, Helvetica Neue, Helvetica, Arial, sans-serif; line-height: 23px;  mso-line-height-rule: exactly;">
                                                                            <span>
                                    <a  target="_blank" href="http://asiagolftravel.com/hotels-resorts" style="text-decoration: none; font-style: normal; font-weight: 500; color:black;">
                                    View More
                                    </a>
                                    </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                                                        <!-- Button-->
                   </table>

                <!-- button more end -->
                      <!-- Spacer -->
                                <tr>
                                    <td height="20" style="padding:0; line-height: 0;">
                                        &nbsp;
                                    </td>
                                </tr>
                                <!-- Spacer End -->
                 @endif

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
                                                       &copy; Copyright 2019 <strong></strong>                                                  <br />
                                                    <a href="" style="text-decoration: none; font-style: normal; font-weight: normal; color:#ffffff;">Unsubscribe</a>
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

</section>
</div>
</div>

 </body>
 </html>
 <script type="text/javascript">

 </script>