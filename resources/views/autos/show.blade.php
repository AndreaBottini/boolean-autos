@extends('layouts.layout')
@section('header')
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img src="{{asset('img/LogoOk.png')}}" width="50" height="50" alt="">
                <a class="navbar-brand" img src="" href=""> AutoBoolScout24</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                       {{-- <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>--}}
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        {{-- <button class="btn btn-success"><a href="{{Route('autos.create')}}">Inserisci la nuova auto</a></button>
                        <button class="btn btn-success"><a href="{{Route('autos.create')}}">Login</a></button> --}}
                    </form>
                </div>
            </nav>
        </div>
@endsection
@section('main')

<div class="autos">
    <ul class="list-group">
        <li class="list-group-item"><strong>Marca: {{$auto->producer}}</li>
        <li class="list-group-item">Modello: {{$auto->model}}</li>
        <li class="list-group-item"><img src="{{$auto->img}}" alt=""></li>
        <li class="list-group-item">Prezzo: {{$auto->price}}</li>
        <li class="list-group-item">Descrizione: {{$auto->description}}</li>
    </ul>
</div>

@endsection
@section('scripts')

@endsection
@section('footer')

@endsection