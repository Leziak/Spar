@extends('layouts.layout')

@section('editprofile')

    <form action="" method="post">
        Name: <input type="text" name="username" value="{{$name}}"><br>
        Email address: <input type="email" name="email" value="{{$email}}"><br>
        Age: <input type="text" name="age" value="{{$age}}"><br>
        Sex: Male <input type="radio" name="sex" value="male"> Female <input type="radio" name="sex" value="female"><br>
        Contact: <input type="text" name="contact" value="{{$contact}}"><br>
        Avatar: <input type="text" name="avatar" value="{{$contact}}"><br>
        Nationality: <input type="text" name="nationality" value="{{$nationality}}"><br>
        Looking for trainer: Yes <input type="radio" name="looking_for_trainer" value="yes"> No <input type="radio" name="looking_for_trainer" value="no"><br>
        Submit: <input type="submit">
    </form>

@endsection