@extends('plantilla')

@section('titulo' ,'Portafolio')

@section('contenido')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4 mb-0">Portafolio</h1>
            @auth
                <a class="btn btn-primary"
                    href="{{ route('projects.create')}}">
                        Crear Proyecto
                </a>
            @endauth
        </div>
        <ul class="list-group">

            @forelse ($projects as $project)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <a class="d-flex text-secondary justify-content-between align-items-center"
                    href=" {{ route('projects.show', $project) }} ">
                    <span class="font-weight-bold">
                        {{ $project->title }}
                    </span>
                    <span class="text-black-50">
                        {{ $project->created_at->format('d/m/y') }}
                    </span>
                </a>
                    {{-- <small> {{ $project->description }} </small> --}}
            </li>
                {{--    <pre> {{var_dump($loop)}}</pre> vista depurada   --}}

            @empty

                <li class="list-group-item border-0 mb-3 shadow-sm">
                    No hay proyectos
                </li>

            @endforelse
                {{ $projects->links() }}
        </ul>
    </div>

@endsection
