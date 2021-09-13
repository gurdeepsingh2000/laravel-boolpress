@extends('templates.base')

@section ('main')

        @foreach($allPosts as $post)
        <div class="post-card">
            <div class="post-bar">{{$post->Place}}</div>

            <div class="post-user">
                {{$post->name}}
                {{$post->surname}}
            </div>

                <div class="post-cover">
                    <div class="img-container">
                        <img src="{{$post->cover}}" alt="">
                    </div>
                </div>

                    <div class="user-interaction">
                        <div class="number-likes">{{$post->likes}}</div>
                        <div class="number-comments">{{$post->comments}}</div>
                    </div>
         </div>
        @endforeach

@endsection