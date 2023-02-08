@extends('layouts.app')

@section('content')
    @foreach($users as $user)
        {{$user->email}}
    @endforeach
@endsection

