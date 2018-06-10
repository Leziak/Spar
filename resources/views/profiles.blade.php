@extends('layouts.layout')

@section('profiles')


{{--{{$users}}--}}

@foreach($users as $user)

    <li>{{$user->id}}</li>
    <li>Name: {{$user->name}}</li>
    <li>Email: {{$user->email}}</li>
    <li>Age: {{$user->age}}</li>
    <li>Sex: {{$user->sex}}</li>
    <li>Contact: {{$user->contact}}</li>
    <li>Avatar: {{$user->avatar}}</li>
    <li>Nationality: {{$user->nationality}}</li>
    <li>Looking for trainer: {{$user->looking_for_trainer}}</li>
    <li>About: {{$user->about}}</li>
    <a href="/profile/{{$user->id}}">DETAIL</a>
    <h1>________________________________________</h1>

@endforeach


@endsection