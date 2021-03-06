@extends('master')
@section('title')
	Create Student | Student Management
@endsection
@section('content')
	<h2>Create new student</h2>
	<form class="form-horizontal" action="{{route('store')}}" method="post">
		{{csrf_field()}}
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="registrationNo">Registration No</label>
	    <div class="col-sm-10">
	      <input type="number" class="form-control" id="registration_id" name="registration_id" placeholder="Enter Registration No">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="name">Name</label>
	    <div class="col-sm-10"> 
	      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="name">Department Name</label>
	    <div class="col-sm-10"> 
	      <input type="text" class="form-control" id="department_name" name="department_name" placeholder="Enter your department name">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="name">Information</label>
	    <div class="col-sm-10">
	     	<textarea class="form-control" id="information" name="information" rows="7" placeholder="Enter your information"></textarea>
	    </div>
	  </div>
	  
	  <div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-success">Register Student</button>
	    </div>
	  </div>
	</form>

@endsection