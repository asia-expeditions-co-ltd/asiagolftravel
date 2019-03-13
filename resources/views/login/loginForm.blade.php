@extends('layout.backend')

@section('title')



@endsection

<style>

/* Extra styles for the cancel button */

.cancelbtn {

  width: auto;

  padding: 10px 18px;

  background-color: #f44336;

}



/* Center the image and position the closeme button */

/* The closeme Button (x) */

.closeme {

  position: absolute;

     right: -20px;

    top: -37px;

  color: #000;

  font-size: 35px;

  font-weight: bold;

}



.closeme:hover,

.closeme:focus {

  color: red;

  cursor: pointer;

}

.imgcontainer {

  text-align: center;

  position: relative;

}



img.avatar {

  width: 40%;



}





/* Modal Content/Box */

.modal-content {

  background-color: #fefefe;

  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */

  border: 1px solid #888;

  width: 50%; /* Could be more or less, depending on screen size */

}



/* The closeme Button (x) */







/* Add Zoom Animation */

.animate {

  -webkit-animation: animatezoom 0.6s;

  animation: animatezoom 0.6s

}



@-webkit-keyframes animatezoom {

  from {-webkit-transform: scale(0)} 

  to {-webkit-transform: scale(1)}

}

  

@keyframes animatezoom {

  from {transform: scale(0)} 

  to {transform: scale(1)}

}



/* Change styles for span and cancel button on extra small screens */

@media screen and (max-width: 300px) {

  span.psw {

     display: block;

     float: none;

  }

  .cancelbtn {

     width: 100%;

  }

}

</style>

@section('content')



<div id="id01" class="modal" style="background:rgb(255, 255, 255); width: 100%; display: block;">
  <div class="col-xl-3 col-md-3 col-sm-2">
    
  </div>

  <div class="col-xl-6 col-md-6 col-sm-8">
    

  <form style="width: 100%;" class="modal-content animate" method="POST" action="{{route('doLogin')}}">

<div class="well" style="padding: 44px; margin-bottom: 0;background: #d2d6de;">

  	<div class="row">

        			@if(session('message'))

        				<div class="alert alert-warning alert-dismissible " role="alert">

						  	{{session('message')}}

						</div>

        			@endif

        		</div>

  	{{ csrf_field()}}

    <div class="imgcontainer">

     <a href="/">
      <span  class="closeme" title="closeme Modal">&times;</span></a>

      <img src="asseter/img/ASIAGOLFTRAVEL-ORG.png" alt="Avatar" class="avatar">

    </div>

     <div class="form-group" >

		        		<label><b>Usern / Email</b></label>

		        		<input  type="text" name="email" class="form-control input-md" placeholder="Enput Email" required>

		        	</div>

    	<div class="form-group">

		        		<label ><b>Password</b></label>

		        		<input type="password" name="password" class="form-control input-md" placeholder="Password" required>

		        	</div>



    	<div class="form-group">

		        		<label><input type="checkbox" name="remember">Remember</label>&nbsp;&nbsp;&nbsp;

		        		<center><button type="submit" class="btn btn-info">Login</button>   </center>

		        	</div>

   </div>

  </form>

</div>



</div>




<script type="text/javascript">


         localStorage.clear();
     
</script>

@endsection