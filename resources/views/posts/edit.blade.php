@extends ('layouts.app')

@section('content')

    <div class="container d-flex justify-content-center align-conter-center">
        <div class="create-post">
        <form action=" {{ route( 'posts.index' )}}" method="POST">
            
            @csrf
            @method('PUT')

            <label for="name">Nome</label>
            <input class='input-text' type="text" name="name" id="name" value= "{{ $post->name }}">

            <br>


            <label for="surname">Cognome</label>
            <input class='input-text' type="text" name="surname" id="surname" value= "{{ $post->surname }}">

            <br>



            <label for="likes">Likes</label>
            <input type="number" name="likes" value="0" id="likes" value= "{{ $post->likes }}">

            <br>



            <label for="comments">Comments</label>
            <input type="number" name="comments" value="0" id="comments" value= "{{ $post->comments }}">

            <br>


            <label for="cover">Image</label>
            <input class='input-text' type="text" name="cover"  id="cover" value= "{{ $post->cover }}">

            <br>


            <select name="Place" id="Place">
                <option value="IT">ITALIANO</option>
                <option value="EN">INGLESE</option>
                <option value="ES">SPAGNOLO</option>
                <option value="DE">TEDESCO</option>
                <option value="JP">GIAPPONESE</option>
            </select>
            

            <br>


            <input type="submit" value='Invia'>

        </form>

        </div>
    </div>

@endsection