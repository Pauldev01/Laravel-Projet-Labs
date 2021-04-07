@extends('template.back.templateBack')
@section('content')
<section class="container">

    {{-- Validate --}}
            @if ($errors->any()) 
                <div class="alert alert-danger"> 
                    <ul> 
                        @foreach ($errors->all() as $error) 
                        <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                </div> 
            @endif

        <h1>Change your email here</h1>
        <form action="/mail/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="from-group">
                <label for="">Current adress : </label>
                <input type="text" name="mail" value="{{old("mail")? old("mail") : $edit->mail}}">
            </div>
            <button type="submit" class="btn" style= "background-color: #D4FOFO">Update</button>
        </form>

    </section>
@endsection