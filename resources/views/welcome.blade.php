@extends('layout')

@section('title')
    Welcome
@endsection

@section('Content')
    <h1>First {{$foo}}Layout</h1>

    <ul>
    @foreach($tasks as $task)
        <li>{{$task}}</li>
    @endforeach
    </ul>
@endsection





