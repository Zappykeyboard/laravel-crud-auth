@extends('layouts.app')

@section('content')
  <h1>All the cats</h1>

  @foreach ($cats as $cat)
    <div class="Cat">
      <p>{{$cat->name}}</p>
    </div>
  @endforeach
@endsection
