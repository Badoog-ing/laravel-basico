@extends('plantilla')

@section('titulo' ,'Home')

@section('contenido')
	<div class="container">
		<div class="row">

			<div class="col-12 col-lg-6">
			    <h1 class="display-4 text-primary">
			    	Pagina Principal
			    </h1>
			    <p class="lead text-secondary">
			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				</p>
			    <p>Bienvenido {{-- {{ $nombre ?? "invitado" }} --}}
				    @auth
				    	{{ auth()->user()->name }}
				    @endauth
			    </p>
			    <a class="btn btn-lg btn-block btn-primary" href=" {{ route('contact') }} ">Contactame</a>
			    <a class="btn btn-lg btn-block btn-outline-primary" href=" {{ route('projects.index') }} ">Listado de proyectos</a>
			</div>

			<div class="col-12 col-lg-6">
				<img class="img-fluid mx-auto d-block mt-4" src="img/home.svg" alt="Home">
			</div>
		</div>
	</div>
@endsection

