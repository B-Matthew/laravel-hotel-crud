@extends('layouts.main-layout')
@section('content')
  <main>
    <div class="container">
      <h2>{{$employee -> firstname}}</h2>
      <h2>{{$employee -> lastname}}</h2>
      <h2>{{$employee -> role}}</h2>
      <h2>{{$employee -> ral}}</h2>
    </div>
  </main>
@endsection
