@extends('layout.backend')

@section('users', 'active')

@section('title', 'Users List')

@section('content')

<div class="wrapper">

  	@include('admin.include.header')

  	@include('admin.include.leftMenu')

  	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.dataTables.min.js') }}"></script>

  	<div class="content-wrapper">  		

		<section class="content">

			<!-- script for news message json -->

			@include('admin.include.message')			

			<!-- end message json>? -->

			<h3>Users List

				@if(Auth::user()->role_id == 1)

				<i class="fa fa-angle-double-right"></i> <a href="{{route('getcreateUser')}}" class="btn btn-primary btn-xs">Add New</a>

				@endif


			</h3>	

			<table id="example" class="table table-hover " cellspacing="0" width="100%">

		        <thead>

		            <tr>

		                <th>User Name</th>

		                <th>Email</th>

		                <th>Phone</th>

		                <th>Role</th>

		                <th style="width: 80px;">Created_at</th>

		                <th style="width: 80px;" class="text-right">Status</th>

		            </tr>

		        </thead>

		        <tbody>


		        	
		            @foreach($users as $userss)

		            <tr>
		      
 
						
		        
		            	<td>{{$userss->fullname}}

		            		@if($userss->isOnline())	
		            			<a href="#" class=""><i class="fa fa-circle text-success"></i> Online</a>    
		            		@else
		            		<?php 

		            				$today      = new DateTime('now', new DateTimeZone('Asia/bangkok'));
                                    $ft         = $today->format('y-m-d H:i:s ');
		            				$add_active = \App\User::find(\Auth::User()->id);
						            $add_active->updated_at  = date('Y-m-d h:i:s' );
						            $add_active->last_active = $ft;
						            $add_active->save();
				          
                                    $datetime1  = new DateTime($userss->last_active);
                                    $datetime2  = new DateTime($ft);
                                    $interval   = $datetime1->diff($datetime2);                  
                                    $day        = '';
                                    $hour       = '';
                                    $min        = '';                                            
                                    $dateAt		=  date('h:i a', strtotime($userss->last_active));
                                    $month		=  date("F j", strtotime($userss->last_active));                                   
										
                                    if ( $interval->h > 0 and $interval->d == 0 and $interval->m == 0){
                                        $hour   =  $interval->h.' Hr';
                                    }elseif ( $interval->d == 1 and $interval->m == 0) {
                                        $day    ='Yesterday at '.$dateAt;
                                    }elseif( $interval->d>1 and $interval->m == 0 ){
                                        $day    = ($interval->d).' Days at '.$dateAt;
                                    }
                                    elseif( $interval->m > 0 ){
                                        $day    = ($month).' at '.$dateAt;
                                    }else{
                                        if($interval->i==0){
                                            $min    ='Now';
                                        }else{          
                                            $min    =$interval->i.' mins a go';
                                        }
                                    }                              
                            ?>
                                        <div style="font-size: 12px; cursor: pointer;" title="{{date('Y-F-j', strtotime($userss->last_active)).' at '.$dateAt}}">{{isset($day)? $day: ''}}{{isset($hour)? $hour: ''}} {{isset($min)? $min: ''}}</div>
				           	@endif

		            	</td>
		            	

		            	<td>{{$userss->email}}
		            		
		            	</td>

		            	<td>{{$userss->phone}}</td>

		            	<td>{{{ $userss->role->name or '' }}}</td>

		            	<td style="width: 80px;">{{ date('Y-M-d', strtotime($userss->created_at))}}</td>

		            	<td style="width: 80px;" class="text-right">	            		
		            		@if(Auth::user()->role_id == 1)

				    		<a href="{{url('admin/user/edit')}}/{{$userss->id}}" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i></a>

				    		<a data-action="user" data-id="{{$userss->id}}" class="btnDelete btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>

				    		@endif

		            	</td>

		            </tr>

		            @endforeach

		        </tbody>

		    </table>

		</section>

    </div>

   	@include('admin.include.footer')

</div>

<script type="text/javascript">

	$(document).ready(function() {

	    $('#example').DataTable();

	} );

</script>

@endsection



