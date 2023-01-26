@extends('adminlte::page')

@section('title')
   Update Employee
@endsection
@section('content_header')
  Update employee
@endsection
@section('content')
 <div class="container">
    <!-- @include('layouts.errors') -->
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Update an Employee</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('employees.update',$employee->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="registration_num">reg num</label>
                            <input class="form-control @error('registration_num') is-invalid @enderror" type="number" name="registration_num" value="{{old('registration_num',$employee->registration_num)}}" />
                            @error('registration_num')
                                    <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group  mb-3">
                            <label for="name">full name</label>
                            <input class="form-control @error('full_name') is-invalid @enderror" name="full_name"  value="{{old('full_name',$employee->full_name)}}"/>
                            @error('full_name')
                            <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="address"> address</label>
                            <input class="form-control @error('address') is-invalid @enderror" name="address" value="{{old('address',$employee->address)}}" />
                            @error('address')
                            <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="city"> city</label>
                            <input class="form-control @error('city') is-invalid @enderror" name="city" value="{{old('city',$employee->city)}}" />
                            @error('city')
                            <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="email"> email</label>
                            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{old('email',$employee->email)}}" />
                            @error('email')
                            <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone"> phone</label>
                            <input class="form-control @error('phone') is-invalid @enderror" name="phone" type="tel" value="{{old('phone',$employee->phone)}}" />
                            @error('phone')
                            <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="departement"> departement</label>
                            <input class="form-control @error('departement') is-invalid @enderror" name="departement" value="{{old('departement',$employee->departement)}}" />
                            @error('departement')
                            <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="hired_at"> hired_at</label>
                            <input class="form-control @error('hired_at') is-invalid @enderror " type="date" name="hired_at" value="{{old('hired_at',$employee->hired_at)}}"" />
                            @error('hired_at')
                            <span class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3 text-center">
                            <button type="submit" class="btn btn-lg btn-outline-info">Update Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection