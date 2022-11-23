@extends('AamarPay.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Register Employee</div>
  <div class="card-body">
      
      <form action="{{ url('raad') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Salary</label></br>
        <input type="text" name="salary" id="salary" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop