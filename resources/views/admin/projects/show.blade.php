@extends('layouts.app')

@section('content')
    <h3>Dettagli del Progetto</h3>

    <a href={{ route('admin.projects.index') }} class="btn btn-primary my-3">Torna alla lista</a>
    <a href={{ route('admin.projects.edit', $project) }} class="btn btn-warning my-3">Modifica</a>

    <div class="row g-5 mt-3">
        <div class="col-3">
            <h5>Nome del progetto</h5>
            <span>{{ $project->name_prog }}</span>
        </div>

        <div class="col-3">
            <h5>Nome repo del progetto</h5>
            <span>{{ $project->repo }}</span>

        </div>

        <div class="col-3">
            <h5>Parte sviluppata</h5>
            <span>{{ $project->type ? $project->type->developed_part : 'Non eiste una parte sviluppata' }}</span>
            - {{ $project->type?->id }}

        </div>

        <div class="col-3">
            <h5>Slug</h5>
            <span>{{ $project->slug }}</span>

        </div>

        <div class="col-6">
            <h5>Link del progetto</h5>
            <span>{{ $project->link }}</span>

        </div>

        <div class="col-6">
            <h5>Descrizione progetto</h5>
            <span>{{ $project->description }}</span>
        </div>
    </div>
@endsection
