@extends('layouts.base')

@section('pageTitle')

  Modifica: {{$comic->title}}

@endsection

@section('content')

<div class="container">

    <h1>Modifica: {{$comic->title}}</h1>

    <form method="POST" action="{{route('comics.update', ['comic' => $comic->id])}}">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" vlaue="{{$comic->title}}">
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" value="{{$comic->price}}">
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Enter series" value="{{$comic->series}}">
        </div>

         <div class="form-group">
            <label for="description">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" value="{{$comic->description}}">
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Submit</button>

    </form>

</div>


@endsection