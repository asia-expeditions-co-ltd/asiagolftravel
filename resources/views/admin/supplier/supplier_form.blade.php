@extends('layout.backend')
@section('supplier', 'active')
@section('title','Add New Supplier')
@section('content')
<div class="wrapper">
  @include('admin.include.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.include.leftMenu')
  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <section class="content row">
    		@include('admin.include.message')
	    	<form method="POST" action="{{route('createsup')}}" enctype="multipart/form-data">
	    		{{ csrf_field() }}
				<section class="col-md-8 connectedSortable">
					<div class="panel">
						<div class="col-md-12">
					       <h3>Supplier Name</h3>
					    </div>
						<div class="row">
						    <div class="box-body">
						      	<div class="col-md-12 col-md-12">
			                    	
			                       	<div class="form-group row">
			                       			<div class="col-md-6 col-xs-6">

			                       			   	<label for="country">Country</label>
				                        	<select name="country" class="form-control btnSearch" action-to="province">
				                        		<option value="">--select--</option>
												@foreach(\App\Country::orderBy('country_name', 'ASC')->get() as $con)	
												<option value="{{$con->id}}">{{$con->country_name}}</option>
												@endforeach		
				                        	</select>
			                            </div>
			                       		<div class="col-md-6 col-xs-6">
			                            	 	<label for="country">Province</label>
				                        	<select name="province" class="form-control " id="province">
				                        		<option value="">--select--</option>
												@foreach(\App\Province::where('province_status', 1)->orderBy('province_name', 'ASC')->get() as $pro)	
												<option value="{{$pro->id}}">{{$pro->province_name}}</option>
												@endforeach		
				                        	</select>
			                            </div>
			                       	
			                            <div class="clearfix"></div>
			                        </div>

			                        <div class="form-group">
			                        	<label>Supplier Name</label>
			                            <input type="text" name="sup_name" class="form-control input-md" placeholder="Supplier Name" required >
			                        </div>

			                      	<div class="form-group">
			                      		<div class="row" style="padding: 4px;">
			                            	<div class="box-body">
								                <script src="{{asset('adminlte/js/lib/tinymce.min.js')}}"></script>
												        <textarea name="intro" class="form-control my-editor">{!! old('intro') !!}</textarea>
								            </div>
							            </div>
			                        </div>

			                        <hr class="colorgraph">
				                </div>
						  	</div>
					  	</div>
				  	</div>
				</section>
				
				<section class="col-md-4 connectedSortable">
					<div class="fancy-collapse-panel">
	                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	                        <div class="panel panel-default">
	                            <div class="panel-heading" role="tab" id="headingTwo">
	                                <h4 class="panel-title">
	                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><strong>Image Feature</strong>
	                                    </a>
	                                </h4>
	                            </div>
	                            <div id="collapseTwo" class="panel-collapse " role="tabpanel" aria-labelledby="headingTwo">
	                                <div class="panel-body">
	                                  <a id="choosImg" href="javascript:void(0)">Choose Image</a>
    							        	        <input name="image" type='file' id="imgInp" style="display: none;" />
          							        	  <center>
          									    	       <img class="img-responsive" id="blah" src="#" style="display: none; cursor: pointer;"/>
    									             </center>
	                                </div>
	                            </div>
	                        </div>
                          <div class="panel panel-default">
	                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	                                <div class="section-btn">
	                                   	<div class="text-right">
                											<input type="submit" name="btnPublish" value="Publish" class="btn bg-olive btn-sm">
                										</div>
									                </div>
									               <div class="clearfix"></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				</section>
			  <div class="clear"></div>
			</form>
	    </section>
	    <!-- /.content -->
	</div>
  <!-- /.content-wrapper -->
  	@include('admin.include.editorscript')
	@include('admin.include.footer')
</div>
@endsection
