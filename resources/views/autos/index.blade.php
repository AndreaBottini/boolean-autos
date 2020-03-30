@extends('layouts.layout')
@section('header')
    <h1>AUTOBOOLSCOUT24</h1>
@endsection
@section('main')
<div class="autos">
    <button class="btn btn-success"><a href="{{Route('autos.create')}}">Inserisci la nuova auto</a></button>

    @foreach ($autos as $auto)
    <ul class="list-group">
        <li class="list-group-item"><strong>Marca: {{$auto->producer}}</li>
        <li class="list-group-item">Modello: {{$auto->model}}</li>
        <li class="list-group-item"><img src="{{$auto->img}}" alt=""></li>
        <li class="list-group-item">Prezzo: {{$auto->price}}</li>
        <li class="list-group-item">Descrizione: {{$auto->description}}</li>
    </ul>
    @endforeach   
</div>
 
@endsection
@section('scripts')
    
@endsection
@section('footer')
    
@endsection



<input type="button" 