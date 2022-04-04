@extends('layouts.base')

@section('pageTitle')
{{$comic->title}}
@endsection

@section('content')
 <div class="container">
   <h1>
       {{$comic->title}}
   </h1>

   <div>
       Descrizione: {!! $comic->description !!}
   </div>

   <div>
       Prezzo: {{$comic->price}}
   </div>

   <a class="btn btn-primary mt-5" href="{{route('comics.index')}}" role="button">Torna indietro</a>

 </div>

@endsection