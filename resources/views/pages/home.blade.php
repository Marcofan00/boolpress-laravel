@extends('layouts.main-layout')
@section('content')
    @auth
        <h1>Welcome!</h1>

    @else 
     <h2>you have to login</h2>
    @endauth
   


@endsection