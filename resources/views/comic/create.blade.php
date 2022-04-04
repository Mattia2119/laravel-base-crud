@extends('layouts.base')

@section('pageTitle','Inserisci un nuovo fumetto')

@section('content')

<div class="container">

    <h1>Nuovo Fumetto</h1>

    <form metod="POST" action="{{route('comics.store')}}">

    @csrf

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
    </div>

    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Enter series">
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Submit</button>

</form>

</div>


@endsection