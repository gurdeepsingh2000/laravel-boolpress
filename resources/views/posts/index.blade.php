@extends('layouts.app')

@section('content')

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
      </tr>
    </thead>

    <tbody>
    @foreach($allPosts as $posts)
      <tr>
        <th scope="row">1</th>
        <td>{{$posts->id}}</td>
        <td>{{$posts->name}}</td>
        <td>{{$posts->surname}}</td>
        <td>{{$posts->likes}}</td>
        <td>{{$posts->comments}}</td>
        <td>{{$posts->Place}}</td>
        <td><img src="{{$posts->cover}}" alt='posted by {{$posts->name , $posts->surname}}'></td>
      </tr>
  @endforeach

    </tbody>
  </table>
@endsection
