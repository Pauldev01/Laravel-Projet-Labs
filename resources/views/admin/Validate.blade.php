@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1>VALIDATION USER</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOM</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">PASSWORD</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                              <th scope="row">{{$item->id}}</th>
                              <td>{{$item->name}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->password}}</td>
                              <td>
                                <form action="/validateUser/{{$item->id}}" method="POST">
                                    @csrf
                                    <button class="btn btn-success" type="submit">Validate</button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@stop 
