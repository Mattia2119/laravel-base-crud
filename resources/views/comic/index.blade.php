@extends('layouts.base')

@section('pageTitle', 'Lista dei Fumetti')

@section('content')

<div class="container">

<h1>Lista dei Fumetti</h1>

<a class="btn btn-secondary" href="{{route('comics.create')}}" role="button">Inserisci un nuovo Fumetto!</a>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Titolo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Serie</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>

      @foreach($comics as $comic) 
        <tr>
          <td>{{$comic->id}}</td>
          <td>{{$comic->title}}</td>
          <td>{{$comic->price}}</td>
          <td>{{$comic->series}}</td>
          <td> <a class="btn btn-primary" href="{{route('comics.show', $comic->id)}}" role="button">Vedi</a></td>
        </tr>
      @endforeach
      
    </tbody>
  </table>

</div>

@endsection