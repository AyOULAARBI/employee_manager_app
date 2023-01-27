@extends('adminlte::page')

@section('content_header')
  show employee
@endsection
@section('content')
 <div class="container">
    <!-- @include('layouts.errors') -->
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                    <h2>{{$employee->full_name}}</h2>
                    <div class="font-white-bold text-center">
                        <a href="{{route('work.cert',$employee->id)}}" class="btn btn-outline-info">Work Certificate</a>
                        <a href="{{route('vacation.req',$employee->id)}}" class="btn btn-outline-primary">vacation request</a>
                    </div>
                </div>
                <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="registration_num">reg num</label>
                            <input  readonly class="form-control " type="number" name="registration_num" value="{{$employee->registration_num}}" />
                        </div>
                        <div class="form-group  mb-3">
                            <label for="name">full name</label>
                            <input  readonly   class="form-control " name="full_name"  value="{{$employee->full_name}}"/>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address"> address</label>
                            <input  readonly class="form-control " name="address" value="{{$employee->address}}" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="city"> city</label>
                            <input  readonly class="form-control" name="city" value="{{$employee->city}}" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="email"> email</label>
                            <input  readonly class="form-control" name="email" type="email" value="{{$employee->email}}" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone"> phone</label>
                            <input  readonly class="form-control " name="phone" type="tel" value="{{$employee->phone}}" />
                            
                        </div>
                        <div class="form-group mb-3">
                            <label for="departement"> departement</label>
                            <input  readonly class="form-control " name="departement" value="{{$employee->departement}}" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="hired_at"> hired_at</label>
                            <input  readonly class="form-control" type="date" name="hired_at" value="{{$employee->hired_at}}"" />
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection