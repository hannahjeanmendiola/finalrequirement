@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px; ">
  <div class="card-header">Create New Students Records</div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="text" name="emailaddress" id="emailaddress" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-info"></br>
        
    </form>
    
  </div>
</div>
  
@stop