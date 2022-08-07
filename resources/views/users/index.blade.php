<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>App Name - @yield('title')</title>
</head>
<body>

   
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user )
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td><a  class="btn btn-primary"   href="{{route('users.edit',['id'=>$user['id']])}}" >edit</a><td>
            <td><a  class="btn btn-danger" href="{{route('users.destroy' , ['id' => $user['id'] ])}}">Delete</a><td>
            
        </tr>
        @endforeach
    </table>
    </div>
    @endsection
</body>
</html>