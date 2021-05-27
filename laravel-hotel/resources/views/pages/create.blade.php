@extends('layouts.main-layout')
@section('content')
  <main>
    <div class="container">
      <form class="" action="{{route('store')}}" method="POST">
        @csrf
        @method('POST')
        <label for="firstName">Nome: </label>
        <input type="text" name="firstname" value="">
        <label for="lastName">Cognome: </label>
        <input type="text" name="lastname" value="">
        <label for="role">Ruolo: </label>
        <input type="number" name="role" value="">
        <label for="ral">Salario: </label>
        <input type="number" name="ral" value="">
        <button type="submit" name="button">Crea</button>
      </form>
    </div>
  </main>
@endsection
