@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 text-center mt-3 mb-5">
            <h2>Benvenuto al nuovo social media Larabook!</h2>
        </div>
        <div class="img-size py-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="">
        </div>
    </div>

    

        <div class="row justify-content-center">
            <div class="col-6 text-center">
                <h3>Registrati ora cliccando qui sotto per scoprire cosa postano i tuoi amici!</h3>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <a href="{{route('register')}}"><button>REGISTRATI ORA!</button></a>
        </div>
</div>

@endsection