@extends('welcome')

@section('content')
  <h2>Showing cat: {{$cat->name}}</h2>
  <div class="container">
    <p>Race: {{$cat->race}}</p>
    <p>RFID: {{$cat->cat_rfid}}</p>
    <a href="{{route('cat.auth.edit', $cat->id)}}">Edit cat...</a>
  </div>

@endsection
