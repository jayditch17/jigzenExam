@extends('layouts.app')

@section('content')
    <h1>Update User</h1>
    <form action="/edit" method="POST">
    <div class="form-group">
    @csrf
        <input type="hidden" name="id" class="form-control" value="{{$users['id']}}">
        <input type="text" name="name" class="form-control" value="{{$users['name']}}"><br>
        <input type="text" name="email" class="form-control" value="{{$users['email']}}"><br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
@endsection