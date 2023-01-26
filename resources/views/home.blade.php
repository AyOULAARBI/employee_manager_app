@extends('adminlte::page')

@section('title')
  Home
@endsection

@section('content_header')
   <h1>Dashboard</h1>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="small-box bg-info py-3">
                <div class="pl-4">
                    <h3>{{$count}}</h3>
                    <p>Employees</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{url('/admin/employees')}}" class="small-box-footer mt-4">
                More info <i class="fas fa-arrow-circle-right"></i>
                </a>

                    <!-- <a href={{ url('admin/employees') }} class="btn btn-outline-primary">employees list</a> -->
            </div>
        </div>
    </div>
</div>
@endsection
