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
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dicono di Noi</a>
                </li>
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
    <h1>INSERISCI I DATI DELL'AUTO</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
        </ul> 
    </div>
    @endif    
@endsection
@section('main')
<div class="form-group">
    <form action="{{route('autos.store')}}" method="POST">
        @csrf
        @method('POST')
        <input type="text" class="form-control" name="producer" placeholder="Producer" id="">
        <input type="text" class="form-control" name="model" placeholder="Model" id="">
        <input type="text" class="form-control" name="img" placeholder="Image" id="">
        <input type="text" class="form-control" name="price" placeholder="Price" id="">
        <input type="text" class="form-control" name="description" placeholder="Description" id="">
        <input type="submit" class="btn btn-success" value="Invia"> 
    </form>
</div>    
@endsection