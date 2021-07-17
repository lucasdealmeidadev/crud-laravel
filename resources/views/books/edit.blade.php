@extends('templates.template')
@section('title', 'Editar de livro')
@section('content')
    <div class="container">
        <div class="text-center mt-3 mb-4">
            <a href="{{url('/')}}">
                <button class="btn btn-success">
                    <i class="fas fa-undo-alt"></i> Voltar
                </button>
            </a>
        </div>

        @component('alerts.messages')
        @endcomponent

        <div class="row">
            <div class="col-12 m-auto">
                <form name="formEdit" id="formEdit" method="POST" action="{{url("books/$book->id")}}">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <input class="form-control" type="text" name="title" id="title" value="{{$book->title ?? ''}}" placeholder="Título:" required>
                        
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="id_user" id="id_user" required> 
                            <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Selecione um autor...'}}</option>
                            
                            @foreach($users as $user)
                                @if ($book->relUsers->id !== $user->id)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endif
                            @endforeach
                        </select>

                        @error('id_user')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="pages" id="pages" value="{{$book->pages ?? ''}}" placeholder="Páginas:" required>
                        
                        @error('pages')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="price" id="price" value="{{$book->price ?? ''}}" placeholder="Preço:" required>
                        
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>         
        </div>
    </div>
@endsection