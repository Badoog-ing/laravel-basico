@extends('plantilla')

@section('titulo' ,'Crear proyecto')

@section('contenido')
	<div class="container">
		<div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            	<form class="bg-white py-3 px-3 shadow rounded"
			    	method="POST" action=" {{ route('projects.store') }} ">

				    <h1 class="text-center display-4">
				    	Crear un nuevo proyecto
				    </h1>
			    	<hr>
			    	{{-- @include('partials.validation-errors') --}}
			        @include('projects._form', ['btnText' => 'Guardar'])

	    		</form>
	    	</div>
	    </div>
	</div>
@endsection
