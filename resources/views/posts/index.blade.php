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


    <tbody id="user-posts">
    @foreach($allPosts as $posts)
      <tr>
        <th scope="row">{{$posts->id}}</th>
        <td>{{$posts->name}}</td>
        <td>{{$posts->surname}}</td>
        <td>{{$posts->likes}}</td>
        <td>{{$posts->comments}}</td>
        <td>{{$posts->Place}} <img src="https://www.countryflags.io/{{$posts->Place}}/flat/64.png"></td>
        <td><div class="img-container"><img src="{{$posts->cover}}" alt='posted by {{$posts->name , $posts->surname}}'></div></td>
        <td>
          <a href="/posts/{{$posts->id}}"><button><i class="fas fa-plus-square"></i></button></a>
          <a href="{{route('posts.edit', $posts)}}"><button><i class="far fa-edit"></i></button></a>

            <form action="{{ route ('posts.destroy' , $posts) }}" method='POST'>
              @csrf

              @method('DELETE')

              <button type="submit" class="btn btn-danger"><i class="fas fa-dumpster"></i></button>
            </form>
        </td>
        
      </tr>
  @endforeach


    </tbody>
  </table>
</div>
@endsection
