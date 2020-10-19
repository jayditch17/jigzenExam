@extends('layouts.app')

@section('content')
    <h3>User Profile</h3>

    <div class="col-md-12">
    <small>Profile Picture:</small><br>
    <img class="rounded mr-2" height="100px" src="{{Auth::user()->avatar}}" alt=""> 
    </div>
    <hr>
    <small>Name:</small><br><br>
    {{ Auth::user()->name }}
    <hr>
    <small>Email:</small><br><br>
    {{ Auth::user()->email }}
@endsection