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
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-dumpster"></i></button>
              </button>

              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Sei Sicuro di voler eliminare questo post?
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Si</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                  </div>
                </div>
              </div>

              
            </form>
        </td>
        
      </tr>
  @endforeach


    </tbody>
  </table>
</div>
@endsection
