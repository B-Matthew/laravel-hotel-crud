@extends('layouts.main-layout')
@section('content')
  <main>
    <div class="container">
      <h1>Ciao {{$name}}</h1>
      <h2>Lista dipendenti:</h2>
      <ul>
        @foreach ($employees as $employee)
          <li>
            <a href="{{route('employee', $employee -> id)}}">{{$employee-> firstname}} {{$employee-> lastname}}</a>
            <a href="{{route('delete',$employee -> id)}}"><i class="fas fa-skull-crossbones"></i></a>
            <a href="{{route('edit',$employee -> id)}}"><i class="fas fa-user-edit"></i></a>
          </li>
        @endforeach
      </ul>
    </div>
  </main>
@endsection
