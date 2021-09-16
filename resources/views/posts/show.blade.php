@extends('layouts.app')

@section('content')
    {{$post->name}}
    <img src="{{$post->cover}}" alt="">
    {{$post->Place}}
@endsection