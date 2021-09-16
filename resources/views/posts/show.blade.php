@extends('layouts.app')

@section('content')
    <div class='container'>

        <a href="{{route('posts.index')}}"><button>Ritorna ai post principali</button></a>

        <div class="row text-center">
            <div class='col-6 align-self-center'>{{$post->name}}</div>
            <div class='col-6'><img src="https://www.countryflags.io/{{$post->Place}}/flat/64.png"></div>
        </div>

        <div class="row justify-content-center cover">
            <div class="img-container"><img src="{{$post->cover}}" alt=""></div>
        </div>

        <div class="row justify-content-center py-5">
            <div class="d-flex justify-content-between col-8">
                <div><span class="mx-3">Number of likes</span>{{$post->likes}}</div>
                <div><span class="mx-3">Number of Comments</span>{{$post->comments}}</div>
            </div>
        </div>

    </div>
@endsection