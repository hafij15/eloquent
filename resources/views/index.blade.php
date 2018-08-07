@extends('master')
@section('content')
<table class="table table-responsive table-hover">
	<tr>
		<th>Sl</th>
		<th>Registration No</th>
		<th>Name</th>
		<th>Department</th>
		<th>Information</th>
		<th>Action</th>
	</tr>
	@php $i=0 ;@endphp
	@foreach($students as $student)
	@php $i++ ;@endphp
	<tr>				
		<td>{{$i}}</td>
		<td>{{$student->name}}</td>
		<td>{{$student->registration_id}}</td>
		<td>{{$student->department_name}}</td>
		<td>{{$student->information}}</td>
		<td>
			<a href="#" class="btn btn-success">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection