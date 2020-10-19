@extends('layouts.app')

@section('content')
    <h1>Users</h1>
    

            <table class="table">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Action</td>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td><a href={{"edit/".$user['id']}} class="btn btn-primary">Edit</a>
                <a href={{"delete/".$user['id']}} class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
            </table>
@endsection