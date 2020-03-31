@extends('plantilla')

@section('titulo' , 'Portafolio / ' . $project->title)

@section('contenido')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<h1 class="display-6 mb-4"> {{ $project->title }} </h1>
		<p class="text-secondary"> {{ $project->description }} </p>
		<p class="text-black-50"> {{ $project->created_at->diffForHumans() }} </p>
		<div class="d-flex justify-content-between align-items-center">
			<a href=" {{ route('projects.index') }} ">
				Regresar
			</a>
			@auth
				<div class="btn-group btn-group-sm">
					<a class="btn btn-primary"
						href="{{ route('projects.edit', $project)}}">
							Editar
					</a>

					<a class="btn btn-danger"
						href="#" onclick="document.getElementById('delete-project').submit()">
							Eliminar
					</a>
					<form id="delete-project" method="POST" action="{{ route('projects.destroy', $project) }}">
						@csrf
						@method('DELETE')
					</form>
				</div>
			@endauth
		</div>
	</div>
</div>
@endsection
