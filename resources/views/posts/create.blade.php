@extends ('layouts.app')

@section('content')

    <div class="container">
        <form action=" {{ route( 'posts.store' )}}" method='post'>
            @csrf

            <label for="name">Nome</label>
            <input type="text" name="name" id="name">

            <br>


            <label for="surname">Cognome</label>
            <input type="text" name="surname" id="surname">

            <br>



            <label for="likes">Likes</label>
            <input type="number" name="likes" value="0" id="likes">

            <br>



            <label for="comments">Comments</label>
            <input type="number" name="comments" value="0" id="comments">

            <br>


            <label for="cover">Image</label>
            <input type="text" name="cover"  id="cover">

            <br>


            <select name="Place" id="Place">
                <option value="IT">ITALIANO</option>
                <option value="EN">ITALIANO</option>
            </select>
            

            <br>


            <input type="submit" value='Invia'>

        </form>
    </div>

@endsection