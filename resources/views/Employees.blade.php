@extends('layouts.app')
@section('title')
  Employees
@endsection

@section('content')
<div class="container">

  <table border="2px" class="table table-dark text-white">
    <thead>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>address</th>
    <th>city</th>
    <th>phone</th>
   </tr>
</thead>
   <tr>
</tr>
  
@foreach($employees as $employee)
<tbody>
      <tr>
        <td>{{$employee->id}}</td>
        <td>{{$employee->full_name}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->address}}</td>
        <td>{{$employee->city}}</td>
        <td>{{$employee->phone}}</td>
      </tr>
    </tbody>
      @endforeach
    </div>
@endsection