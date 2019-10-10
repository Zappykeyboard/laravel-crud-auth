@extends('welcome')

@section('content')
  <p>  <a href="{{route('cat.auth.show', $cat->id)}}">INDIETRO</a> </p>
  <h3>Edit cat:</h3>
  <div class="container">
    <form class="cat-edit" action="{{route('cat.auth.update', $cat->id)}}" method="POST">
      @csrf
      <div class="input">
        <label for="name">Choose a name: </label>
        <input type="text" name="name" value="{{$cat->name}}">
      </div>
      <div class="input">
        <label for="race">Insert Race: </label>
        <input type="text" name="race" value="{{$cat->race}}">
      </div>
      <div class="input">
        <label for="cat_rfid">Insert RFID: </label>
        <input type="text" name="cat_rfid" value="{{$cat->cat_rfid}}">
      </div>
      <div class="input">
        <button type="submit" name="button">SAVE</button>
      </div>
    </form>

  </div>
@endsection
