@extends('templates.template')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="text-center mt-3 mb-4">
            <a href="{{url('books/create')}}">
                <button class="btn btn-success">
                    <i class="fas fa-plus"></i> Cadastro
                </button>
            </a>
        </div>
        <div class="row">
            <div class="table-responsive">
                <div class="col-12 m-auto">
                    <table class="table table-bordered table-striped border">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Título</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Preço</th>
                                <th scope="col" class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($books->count() > 0)
                                @foreach($books as $book)
                                    <tr>
                                        <td scope="row">{{$book->id}}</td>
                                        <td>{{$book->title}}</td>
                                        <td>{{$book->relUsers->name}}</td>
                                        <td>{{$book->price}}</td>
                                        <td class="text-center">
                                            <a href="{{url("books/$book->id")}}" style="text-decoration: none;">
                                                <button class="btn btn-dark">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </a>

                                            <a href="{{url("#")}}" style="text-decoration: none;">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </a>

                                            <a href="{{url("#")}}" style="text-decoration: none;">
                                                <button class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">Nenhum registro foi encontrado...</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div> 
            </div>           
        </div>
    </div>
@endsection