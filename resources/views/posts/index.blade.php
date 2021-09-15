@extends('layouts.app')

@section('content')

<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">N° Of Likes</th>
        <th scope="col">N° Of Comments</th>
        <th scope="col">Place</th>
        <th scope="col">Image pubblished</th>
        <th scope="col">Link</th>
      </tr>
    </thead>


<a href="">
    <tbody>
    @foreach($allPosts as $posts)
      <tr>
        <th scope="row">{{$posts->id}}</th>
        <td>{{$posts->name}}</td>
        <td>{{$posts->surname}}</td>
        <td>{{$posts->likes}}</td>
        <td>{{$posts->comments}}</td>
        <td>{{$posts->Place}} <img src="https://www.countryflags.io/{{$posts->Place}}/flat/64.png" alt=""></td>
        <td><img src="{{$posts->cover}}" alt='posted by {{$posts->name , $posts->surname}}'></td>
        <td><a href="/posts/{{$posts->id}}"><i class="bi bi-box-arrow-right"></i></a></td>
      </tr>
  @endforeach
</a>

    </tbody>
  </table>

</div>
@endsection
