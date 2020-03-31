@extends('plantilla')

@section('titulo' ,'Crear proyecto')

@section('contenido')
	<div class="container">
		<div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">
    		{{-- @include('partials.validation-errors') --}}
			    <form class="bg-white py-3 px-3 shadow rounded"
			    	method="POST" action=" {{ route('projects.update', $project ) }} ">
					<h1 class="text-center dislay-4">
						Editar proyecto
					</h1>
					<hr>
			        @method('PATCH')
			        @include('projects._form', ['btnText' => 'Actualizar'])
			    </form>
			</div>
		</div>
	</div>
@endsection
