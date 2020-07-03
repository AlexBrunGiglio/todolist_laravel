@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="text-center">
        <h1>Choisir une tâche à modifier :</h1>
    </div>
    <div class="">
        <form class="mt-4" method="POST" action="{{ url('edit/'.$task->id) }}">
            @csrf
            <div class="form-group">
                <label for="titleTask">Nom de la tâche :</label>
                <input type="text" class="form-control" id="titleTask" name="title" placeholder="Nom de la tâche" value="{{ $task->title }}">
            </div>
            <div class="form-group">
                <label for="descpTask">Description de la tâche :</label>
                <input type="text" class="form-control" id="descpTask" name="description" placeholder="Description" value="{{ $task->description }}">
            </div>
            <div class="form-group">
                <label for="featureTask">Fonctionnalités listées :</label>
                <textarea class="form-control" id="featureTask" name="task" placeholder="Fonctionnalités" aria-valuetext="{{ $task->task }}"></textarea>
            </div>
            <button type="submit" class="btn float-right btn-warning">Enregistrer</button>
        </form>
        <form action="{{ url('edit/'.$task->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="form-group">
                <label for="featureTask">Suppression de la tâche :</label>
                <button type="submit" class="btn btn-danger ml-5">Supprimer tâche</button>
            </div>
        </form>
    </div>
</div>
@endsection