@extends('templates.template')
@section('title', "Visualizar - $book->title")
@section('content')
    <div class="container">
        <div class="text-center mt-3 mb-4">
            <a href="{{url('/')}}">
                <button class="btn btn-success">
                    <i class="fas fa-undo-alt"></i> Voltar
                </button>
            </a>
        </div>
        <div class="row">
            <div class="col-12 m-auto">
                <p>Título: {{$book->title}}</p>
                <p>Páginas: {{$book->pages}}</p>
                <p>Preço: R$ {{$book->price}}</p>
                <p>Autor: {{$book->relUsers->name}}</p>
                <p>E-mail do autor: {{$book->relUsers->email}}</p>
            </div>
        </div>
    </div>
@endsection