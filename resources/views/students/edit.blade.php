@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('student/' . $students->id) }}" method="post" onsubmit="return confirmSubmit()">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $students->id }}" />
        <label>Name</label><br>
        <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control"><br>
        <label>Course</label><br>
        <input type="text" name="course" id="course" value="{{ $students->course }}" class="form-control"><br>
        <label>Email Address</label><br>
        <input type="text" name="emailaddress" id="emailaddress" value="{{ $students->emailaddress }}" class="form-control"><br>
        
        <input type="submit" value="Update" class="btn btn-success"><br>
        
      </form>
    
  </div>
</div>

<script>
  function confirmSubmit() {
    return confirm('Are you sure the information is correct?');
  }
</script>

@endsection
