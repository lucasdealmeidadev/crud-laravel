@extends('templates.template')
@section('title', 'Cadastro de livros')
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
                <form name="formCad" id="formCad" method="POST" action="{{url('books')}}">
                    @csrf

                    <div class="form-group">
                        <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Título:" required>
                        
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="id_user" id="id_user" required>
                            
                            @if (!empty(old('id_user')))

                                @foreach($users as $user)
                                    @if ($user->id == old('id_user'))
                                        <option value="{{$user->id}}" selected>{{$user->name}}</option>
                                    @else
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endif        
                                @endforeach

                            @else
                                <option value="" selected disabled>Selecione um autor...</option>
                                
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>     
                                @endforeach
                            @endif
                        </select>

                        @error('id_user')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="pages" id="pages" value="{{ old('pages') }}" placeholder="Páginas:" required>
                        
                        @error('pages')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="price" id="price" value="{{ old('price') }}" placeholder="Preço:" required onKeyPress="return(inputmask(this,'.',',',event))">
                        
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>         
        </div>
    </div>
@endsection