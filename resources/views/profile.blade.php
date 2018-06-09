@extends('layouts.layout')

@section('profile')

    <li>Name: {{$name}}</li>
    <li>Email: {{$email}}</li>
    <li>Age: {{$age}}</li>
    <li>Sex: {{$sex}}</li>
    <li>Contact: {{$contact}}</li>
    <li>Avatar: {{$sex}}</li>
    <li>Nationality: {{$nationality}}</li>
    <li>Looking for trainer: {{$looking_for_trainer}}</li>
    <li>About: {{$about}}</li>
    <a href="/editprofile">EDIT PROFILE</a>

@endsection