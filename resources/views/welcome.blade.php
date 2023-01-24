@extends('layouts.app')

@section('title')
        Welcome | employee manager app
@endsection

@section('content')
        <div class="container">
            <div class="row my-4">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Welcome</h3>
                        </div>
                        <div class="card-body text-center">
                           @guest
                           <a href={{ route('login') }} class="btn btn-outline-primary">
                            Login
                           </a>
                           @endguest
                           @auth
                           {{__('you are logged inn')}}
                           @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
