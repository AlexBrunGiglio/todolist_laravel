@extends('layouts.master')

@section('content')

<div class="container">
    <div class="text-center mt-4">
        <h1>Affichage de votre todolist</h1>
    </div>
    <div class="row mt-3">
        @foreach ($tasks as $task)
        <div class="col-sm-4 mt-2">
            <div class="card">
                <div class="card-body left-card">
                    <a type="button" class="btn btn-warning float-right btn-sm" href="{{ url('edit/'.$task->id) }}">Modifier tâche</a>
                    <h4 class="card-title">{{ $task->title }}</h4>
                    <p class="card-text">{{ $task->description }}</p>
                    <p>{{ $task->id }} </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="check1">
                            <label class="custom-control-label" for="check1">{{ $task->task }}</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
