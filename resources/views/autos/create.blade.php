@extends('layouts.layout')
@section('header')
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