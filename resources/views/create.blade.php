@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="text-center">
        <h1>Ajouter une nouvelle tâche :</h1>
    </div>
    <div class="">
        <form class="mt-4" action="{{ url('create') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titleTask">Nom de la tâche :</label>
                <input type="text" class="form-control" id="titleTask" name="title" placeholder="Nom de la tâche">
            </div>
            <div class="form-group">
                <label for="descpTask">Décrivez la tâche :</label>
                <input type="text" class="form-control" id="descpTask" name="description" placeholder="Description">
            </div>
            <div class="form-group">
                <label for="featureTask">Listez vos fonctionnalités :</label>
                <textarea class="form-control" id="featureTask" name="task" placeholder="Fonctionnalités"></textarea>
            </div>
            <button type="submit" class="btn float-right btn-primary">Enregistrer</button>
      </form>
    </div>
</div>
@endsection