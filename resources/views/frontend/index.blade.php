  	  @extends('layouts.frontend')
  	  @section('content')
     

<div class="col-md-8 offset-md-2">
@if (session('smg'))
    <div class="alert alert-danger">
        {{ session('smg') }}
    </div>
@endif
</div>



  	  <div class="container">
  	  	 <div class="row justify-content-lg-center">
  	  	 	<div class="col-lg-8 contact-form">
	   <form action="{{route('insert')}}" method="post">
	   	@csrf
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
		  </div>
		  <div class="form-group">
		    <label for="Username">Username</label>
		    <input type="text" class="form-control" name="username" id="Username" placeholder="Enter your Username">
		  </div>
		   <div class="form-group">
		    <label for="Email">Email</label>
		    <input type="email" class="form-control" name="email" id="Email" placeholder="Enter your email">
		  </div>
		   <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="pass" id="passowrd" placeholder="Enter your password">
		  </div>
		   <div class="form-group">
		    <label for="re_pass">Confirm Password</label>
		    <input type="password" class="form-control" id="re_pass" placeholder="Confirm Password" name="re_pass">
		  </div>
		  <div class="form-group">
		    <label for="roll">Roll</label>
		    <input type="text" class="form-control" name="roll" id="roll" placeholder="Enter your roll">
		  </div>
		  <div>
		  	 Select your gender &nbsp;&nbsp;
		     Male <input value="Male" type="radio" name="gander">&nbsp;&nbsp;
		      Female <input value="Female" type="radio" name="gander">&nbsp;&nbsp
		     Other <input value="Other" type="radio" name="gander">&nbsp;&nbsp;
		  </div>
		   <div>
		  	 Select your subject &nbsp;&nbsp;
		     Bangla <input value="Bangla" type="checkbox" name="sub">&nbsp;&nbsp;
		      English <input value="English" type="checkbox" name="sub">&nbsp;&nbsp
		     Math <input value="Math" type="checkbox" name="sub">&nbsp;&nbsp;
		  </div>
		  <div class="">
		  	 Select your country
		  	 <select name="country">
		  	 	<option>Bangladesh</option>
		  	 	<option>Pakistan</option>
		  	 	<option>India</option>
		  	 	<option>England</option>
		  	 </select>
		  </div>
            <input  type="submit" class="form-control btn-primary" value="Register" name="Register">
		</form>
	  </div>
	    </div>
     </div>

     @endsection;