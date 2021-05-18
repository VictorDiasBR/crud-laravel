@extends('templates.template')

@section('content')
<div class="container px-4 py-5" id="featured-3">
  <h1 class="text-center"> Visualizar</h1>
    <div class="text-center">
        @php
            $user=$book->find($book->id)->relUsers;
        @endphp
        Título: {{$book->titulo}} <br>
        Usuário: {{$user->name}} <br>
    </div>
</div>
@endsection
