@extends('templates.template')

@section('content')

<div class="text-center col-8 m-auto">

   @if (isset($errors) && count($errors)>0)
       <div class="text-center mt-4 mb-4 p-2 alert-danger">
             @foreach ($errors->all() as $erro )
                 {{$erro}}
             @endforeach
       </div>
   @else

   @endif
   @if (isset($book))
   <form action="{{url("books/$book->id")}}" name="formEdit" id="formEdit" method="POST" >
    @method('PUT')
   @else
   <form action="{{url('books')}}" name="formCad" id="formCad" method="POST" >
   @endif
        @csrf
        <select class="form-control mt-2 mb-3"  name="id_user" id="id_user"  required>
            <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Autor'}}</option>
            @foreach ($user as $users)
                <option value="{{$users->id}}">{{$users->name}}</option>
            @endforeach
        </select>
        <input class="form-control mt-2 mb-3" type="text" name="titulo" id="titulo" placeholder="Título" value="{{$book->titulo ?? ''}}" required>
        <input class="btn btn-primary mt-2 mb-3 " type="submit" value="@if (isset($book)) Editar @else Cadastrar @endif">
    </form>
</div>
@endsection
