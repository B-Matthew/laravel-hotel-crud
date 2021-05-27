@extends('layouts.main-layout')
@section('content')
  <main>
    <div class="container">
      <form class="" action="{{route('update', $employee-> id)}}" method="POST">
        @csrf
        @method('POST')
        <label for="firstName">Nome: </label>
        <input type="text" name="firstname" value="{{$employee -> firstname}}">
        <label for="lastName">Cognome: </label>
        <input type="text" name="lastname" value="{{$employee -> lastname}}">
        <label for="role">Ruolo: </label>
        <input type="number" name="role" value="{{$employee -> role}}">
        <label for="ral">Salario: </label>
        <input type="number" name="ral" value="{{$employee -> ral}}">
        <button type="submit" name="button">Modifica</button>
      </form>
    </div>
  </main>
@endsection
