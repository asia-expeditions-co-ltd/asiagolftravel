@extends('layout.backend')

@section('title')

  Admin - Dashbaord

@endsection

@section('content')

<div class="wrapper">

  @include('admin.include.header')

  @include('admin.include.leftMenu')

  <div class="content-wrapper">

    <section class="content-header">

      <h1>@yield('title')</h1>

    </section>

    <section class="content">

      <div class="row">

        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-green">

              <div class="inner">

                <h3>{{\App\Tour::where(['status'=>1,'type'=>1])->count()}}</h3>

                <p>Tours And Golf Package</p>

              </div>

              <div class="icon">

                <i class="ion ion-stats-bars"></i>

              </div>

              <a href="{{route('tourList')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

  <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-green">

              <div class="inner">

                <h3>{{\App\Tour::where(['status'=> 1,'type'=>2])->count()}}</h3>

                <p>Golf Coures</p>

              </div>

              <div class="icon">

                <i class="ion ion-stats-bars"></i>

              </div>

              <a href="{{route('tourList')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>
          <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-green">

              <div class="inner">

                <h3>{{\App\Tour::where(['status'=>1,'type'=>3])->count()}}</h3>

                <p>Hotels And Resort</p>

              </div>

              <div class="icon">

                <i class="ion ion-stats-bars"></i>

              </div>

              <a href="{{route('tourList')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>
         <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-green">

              <div class="inner">

                <h3>
                  {{ $data=\DB::table('tbl_countview')
    ->select(\DB::Raw('ip'))
    ->groupBy(\DB::raw('(ip)'))
    ->get()->count() }}
  </h3>

                <p>Viewer</p>

              </div>

              <div class="icon">

                <i class="ion ion-eye"></i>

              </div>

              <a href="{{route('getcount')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>



        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-yellow">

            <div class="inner">

              <h3>{{\App\User::all()->count()}}</h3>

              <p>User Registrations</p>

            </div>

            <div class="icon">

              <i class="ion ion-person-add"></i>

            </div>

            <a href="{{route('getUser')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-red">

            <div class="inner">

              <h3>{{\App\Events::where('status', 1)->count()}}</h3>

              <p>Our Activities</p>

            </div>

            <div class="icon">

              <i class="ion ion-pie-graph"></i>

            </div>

            <a href="{{route('eventList')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-yellow">

            <div class="inner">

              <h3>{{\App\Slide::where('status', 1)->count()}}</h3>

              <p>Slide Show</p>

            </div>

            <div class="icon">

              <i class="fa fa-sticky-note"></i>

            </div>

            <a href="{{route('getSlide')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

          </div>

        </div>

      </div>

    </section>

  </div>  

  <!-- @include('admin.include.footer') -->

 

 

  <div class="control-sidebar-bg"></div>

</div>

@endsection



