@extends('adminlte::page')

@section('content_header')
  Add employee
@endsection
@section('content')
 <div class="container">
    @include('layouts.errors')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Add an Employee</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('employees.store')}}" methode="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="registration_num">reg num</label>
                            <input class="form-control" name="registration_num" value="{{old('registration_num')}}" />
                        </div>
                        <div class="form-group  mb-3">
                            <label for="name">full name</label>
                            <input class="form-control" name="full_name"  value="{{old('full_name')}}"/>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address"> address</label>
                            <input class="form-control" name="address" value="{{old('address')}}" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="city"> city</label>
                            <input class="form-control" name="city" value="{{old('city')}}" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="email"> email</label>
                            <input class="form-control" name="email" type="email" value="{{old('email')}}" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone"> phone</label>
                            <input class="form-control" name="phone" type="tel" value="{{old('phone')}}" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="departement"> departement</label>
                            <input class="form-control" name="departement" value="{{old('departement')}}" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="hired_at"> hired_at</label>
                            <input class="form-control" type="date" name="hired_at" value="{{old('hired_at')}}"" />
                        </div>
                        <div class="form-group mb-3 text-center">
                            <button type="submit" class="btn btn-lg btn-outline-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection