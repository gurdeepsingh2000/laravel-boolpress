@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
    </div>
</div>


    <div class="container">
        <div class="row justify-content-center text-center">
            @foreach($allPosts as $post)
            <div class="post-card py-5">
                <div class="post-bar">Luogo: {{$post->Place}}</div>

                <div class="post-user">
                    <span>Nome: {{$post->name}}</span>
                    <span>Cognome: {{$post->surname}}</span>
                </div>

                    <div class="post-cover">
                        <div class="img-container">
                            <img src="{{$post->cover}}" alt="">
                        </div>
                    </div>

                <div class="user-interaction">
                    <div class="number-likes"><span>Likes </span>{{$post->likes}}</div>
                    <div class="number-comments"><span>Commenti </span>{{$post->comments}}</div>
                </div>
         </div>
@endforeach

    </div>
</div>

@endsection
