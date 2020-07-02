@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="text-center">
        <h1>Choisir une tâche à modifier :</h1>
    </div>
    <div class="">
        <form class="mt-4">
            <div class="form-group">
                <label for="titleTask">Nom de la tâche :</label>
                <input type="text" class="form-control" id="titleTask" placeholder="Nom de la tâche">
            </div>
            <div class="form-group">
                <label for="descpTask">Description de la tâche :</label>
                <input type="text" class="form-control" id="descpTask" placeholder="Description">
            </div>
            <div class="form-group">
                <label for="featureTask">Fonctionnalités listées :</label>
                <textarea class="form-control" id="featureTask" placeholder="Fonctionnalités"></textarea>
            </div>
            <div class="form-group">
                <label for="featureTask">Suppression de la tâche :</label>
                <button type="submit" class="btn btn-danger ml-5">Supprimer tâche</button>
            </div>
            <button type="submit" class="btn float-right btn-warning">Enregistrer</button>
      </form>
    </div>
</div>
@endsection