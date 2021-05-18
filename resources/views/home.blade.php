@extends('templates.template')

@section('content')

    <div class="container px-4 py-5" id="featured-3">

        <div class="text-center mt-3 mb-4">
            <a href="{{url('books/create')}}">
                <button class="btn btn-success">Cadastrar</button>
            </a>
        </div>
        @csrf
        <table class="table text-center">

            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Livro</th>
                <th scope="col">Senha</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>

            @foreach ($book as $books)
            @php
                $user=$books->find($books->id)->relUsers;
            @endphp

              <tr>
                <th scope="row">{{$books->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$books->titulo}}</td>
                <td>{{$user->password}}</td>
                <th>

                    <a href="{{url("books/$books->id")}}">
                        <button class="btn btn-dark">Visualisar</button>
                    </a>
                    <a href="{{url("books/$books->id/edit")}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <a href="{{url("books/$books->id")}}" class="js-del">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </th>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$book->links()}}
        <br>
        <h2 class="pb-2 border-bottom">Columns with icons</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
            </div>
            <h2>Featured title</h2>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
              Call to action
              <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
          <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
            </div>
            <h2>Featured title</h2>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
              Call to action
              <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
          <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
            </div>
            <h2>Featured title</h2>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
              Call to action
              <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
        </div>

        <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">Custom cards</h2>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
              <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                    <ul class="d-flex list-unstyled mt-auto">
                      <li class="me-auto">
                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                      </li>
                      <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                        <small>Earth</small>
                      </li>
                      <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                        <small>3d</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                    <ul class="d-flex list-unstyled mt-auto">
                      <li class="me-auto">
                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                      </li>
                      <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                        <small>Pakistan</small>
                      </li>
                      <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                        <small>4d</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                    <ul class="d-flex list-unstyled mt-auto">
                      <li class="me-auto">
                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                      </li>
                      <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                        <small>California</small>
                      </li>
                      <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                        <small>5d</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

      @endsection
