@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="text-center">
        <h1>Choisir une tâche à supprimer :</h1>
    </div>
    <div class="">
        <form class="mt-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="selectTask">Choix de la tâche : </label>
                </div>
                <select class="custom-select" id="selectTask">
                  <option selected>Selectionner</option>
                  <option value="1">Tâche 1</option>
                  <option value="2">Tâche 2</option>
                  <option value="3">Tâche 3</option>
                </select>
            </div>
            <button type="submit" class="btn float-right btn-danger">Enregistrer</button>
      </form>
    </div>
</div>
@endsection