@extends('layouts.app')
@section('title', 'List User')

@section('content')
    
   <form action="{{route('users.store')}}" method="post">
    @csrf
    <label for="name">name</label>
    <input type="text" name="name" >
    <label for="email"></label>
    <input type="email" name="email">
    <input type="submit" >
   </form>
@endsection
