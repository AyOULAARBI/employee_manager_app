@extends('adminlte::page')
@section('title')
   vacation Request
@endsection
@section('content_header')
 Vacation Request
@endsection
@section('content')
   <div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-center align-items-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/1596/1596892.png" alt="imag" width="90">
                    <h2>Vacation Request</h2>
                </div>
                <div class="card-body">
                    <h3>Address : 32 street silicon valley,CA</h3>
                    <h3>Date :{{ date("Y/m/d")}}</h3>
                    <h3>RE: {{$employee->full_name}}</h3>
                    <br>
                    To whom it may concern <br><br>
                    <p style="font-size:22px">This letter is to verify that <b>{{$employee->full_name}}</b> who is currently employed by <br><br>
               <b>AyOULAARBI.inc</b>  company ,who works in the departement of <b>{{$employee->departement}}</b> <br> <br>
                has asked for  a <b>vacation request</b> from <b>{{date("Y/m/d")}}</b> to  <b>{{_('___________________')}}</b>. <br><br>
                
                <br><br><br>
                <i>Sincerely</i>
                <br>
                <b>AyOULAARBI</b><br>
                Director of the AyOULAARBI inc company <br><br>
                <img src="https://cdn-icons-png.flaticon.com/128/1596/1596892.png" alt="imag" width="40" style="transform:rotate(39deg)">
                <button onclick="document.querySelector('button').style.display='none';window.print()"> <i class="fas fa-print"></i> </button>
                </p>
                    
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection
