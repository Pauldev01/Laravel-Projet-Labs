{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0" style="color: rgb(100, 31, 177)">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5 text-center" style="color: rgb(100, 31, 177)">My profile</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            {{-- <th scope="col">Image</th> --}}
                            <th scope="col">Name :</th>
                            <th scope="col">First-name :</th>
                            {{-- <th scope="col">Fonction :</th> --}}
                            <th scope="col">Email :</th>
                          </tr>
                        </thead>
                        <tbody>
                            @auth
                                <tr>
                                    {{-- <td>
                                        <img src="{{asset('storage/img/'.Auth::user()->url)}}" alt="" height="50px"> 
                                    </td> --}}
                                    <td>{{Auth::user()->name}}</td>
                                    <td>{{Auth::user()->firstname}}</td>
                                    {{-- <td>{{Auth::user()->functions->function}}</td> --}}
                                    <td>{{Auth::user()->email}}</td>

                                    <td>
                                        <a href="/users/{{Auth::user()->id}}/edit" class="btn" style="background-color: #FFCCB6">Edit</a>
                                    </td>
                                </tr>
                            @endauth
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@stop
