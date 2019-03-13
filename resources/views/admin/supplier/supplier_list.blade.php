@extends('layout.backend')

@section('supplier', 'active')

@section('title', 'Supplier List')

<?php use App\component\Content; ?>

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

			<h3>Province Lists <i class="fa fa-angle-double-right"></i> <a href="{{route('getsup')}}" class="btn btn-primary btn-xs">Add New</a></h3>

			<table id="example" class="table table-hover " cellspacing="0" width="100%">

		        <thead>

		            <tr>

                        <th>Picture</th>

		                <th>Supplier Name</th>

		                <th>Country</th>

		                <th>Province</th>
		                <th>Status</th>

		              

		            </tr>

		        </thead>

		        <tbody>

		            @foreach($supp as $supitem)

		            <tr>

		            	<td style="width:6%;vertical-align:middle;text-align:center;">	

	    					<img style="width:100%;" src="{{Content::urlImage($supitem->supplier_photo)}}">

	    				</td>                  

		            	<td>{{$supitem->supplier_name}}</td>

		            	<td>{{ isset($supitem->country) ? $supitem->country->country_name : ''}}</td>

		            	<td>{{ isset($supitem->province) ? $supitem->province->province_name : ''}}</td>



		            	<td class="text-right" style="width: 9%;">

	    						<a href="{{route('getsupEdit',['id'=>$supitem->id])}}" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i></a>

		    					@if(Auth::user()->role_id == 1)

									@if(isset($_GET['sort']))

									<a data-action="supitem" data-id="{{$supitem->id}}" class="btnDelete btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash"></i></a>

									@else

									<a data-action="supplier" data-id="{{$supitem->id}}" class="btnDelete btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash"></i></a>

									@endif

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

	});

</script>

@endsection



