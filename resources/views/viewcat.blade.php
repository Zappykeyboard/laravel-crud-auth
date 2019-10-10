@extends('welcome')

@section('content')
  <h2>Showing cat: {{$cat->name}}</h2>
  <p>Race: {{$cat->race}}</p>
  <p>RFID: {{$cat->cat_rfid}}</p>
@endsection
