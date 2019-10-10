@extends('welcome')

@section('content')
  <h1>All the cats</h1>
  <p> <a href="{{route('cat.auth.create')}}">New Cat...</a> </p>
  @foreach ($cats as $cat)
    <div class="Cat">
      <p>  <a href="{{route('cat.auth.show', $cat->id)}}">{{$cat->name}}</a> </p>
    </div>
  @endforeach
@endsection
