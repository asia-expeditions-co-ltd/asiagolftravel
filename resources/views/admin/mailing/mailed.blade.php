@extends('layout.backend')
@section('mailing', 'active')
@section('title', 'subscribe List')
<?php 
use App\component\Content; ?>

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
		
			<form action="{{route('delete_data_sub')}}" method="POST">
				{{csrf_field()}}	
			<table id="example" class="table table-hover " cellspacing="0" width="100%">
		        <thead>
		            <tr>

		                <th>No</th>
		                <th>Email</th>
		                <th>Name Tours</th>		               		             		            
		                <th style="width: 80px;">Created_at</th>
		                <th style="width: 80px;" class="text-right">Status</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php $no=0; ?>
		            @foreach($data as $email)
		            <tr>
		                <td style="width: 20px;">{{++$no}}</td>
		            	<td>{{$email->email}}</td>
		            	<td style="">@foreach(\App\Tour::whereIn('id',explode(',', $email->tours_id))->get() as $bb){{$bb->title}} <br> @endforeach</td>            		            
		            	<td style="width: 80px;">{{ date('Y-M-d', strtotime($email->created_at))}}</td>
		            	<td style="width: 80px;" class="text-right">

				    		<a data-action="mailed" data-id="{{$email->id}}" class="btnDelete btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
				    	
		            	</td>
		            </tr>
		            @endforeach
		        </tbody>
		    </table>
		    	</form> 
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
