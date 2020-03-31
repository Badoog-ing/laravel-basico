@extends('plantilla')

@section('titulo' ,'Contacto')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">

                    <form class="bg-white shadow rounded py-3 px-3"
                    method="POST" action=" {{ route('messages.store') }} ">
                    @csrf
                    <h1 class="display-4">Contacto</h1>
                    <hr>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                            id="name" name="name" placeholder="Nombre..." value="">
                        @error('name')
                            <spam class="invalid-feedback" role="alert">
                                <strong> {{ $message }} </strong>
                            </spam>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                            type="email" id="email" name="email" placeholder="Email..." value=" {{ old('email') }}">
                        @error('email')
                            <spam class="invalid-feedback" role="alert">
                                <strong> {{ $message }} </strong>
                            </spam>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
                            id="subject" name="subject" placeholder="Asunto" value=" {{ old('subject') }}">
                        @error('subject')
                            <spam class="invalid-feedback" role="alert">
                                <strong> {{ $message }} </strong>
                            </spam>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Asunto</label>
                        <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
                        id="content" name="content" placeholder="Mensaje..." value=" {{ old('content') }}"></textarea>
                         @error('content')
                            <spam class="invalid-feedback" role="alert">
                                <strong> {{ $message }} </strong>
                            </spam>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-lg btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
