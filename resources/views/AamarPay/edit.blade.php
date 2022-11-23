@extends('AamarPay.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Employee</div>
  <div class="card-body">
      
      <form action="{{ url('raad/' .$Employee->id) }}" method="post">
        {!! csrf_field() !!}
        <input type="hidden" name="id" id="id" value="{{$Employee->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$Employee->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$Employee->email}}" class="form-control"></br>
        <label>Salary</label></br>
        <input type="text" name="salary" id="salary" value="{{$Employee->salary}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop