@extends('welcome')

@section('content')
  <p>  <a href="{{route('cat.index')}}">INDIETRO</a> </p>
  <h3>New cat:</h3>
  <div class="container">
    <form class="cat-create" action="{{route('cat.auth.store')}}" method="POST">
      @csrf
      <div class="input">
        <label for="name">Choose a name: </label>
        <input type="text" name="name" value="Miao">
      </div>
      <div class="input">
        <label for="race">Insert Race: </label>
        <input type="text" name="race" value="Felino">
      </div>
      <div class="input">
        <label for="cat_rfid">Insert RFID: </label>
        <input type="text" name="cat_rfid" value="LdjBDKJ4h">
      </div>
      <div class="input">
        <button type="submit" name="button">SAVE</button>
      </div>
    </form>

  </div>
@endsection
