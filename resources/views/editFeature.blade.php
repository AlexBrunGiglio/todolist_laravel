@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="text-center">
        <h1>Modifier une sous-tâche :</h1>
    </div>
    <div class="">
        <form class="mt-4" action="{{ url('features/edit/'.$features->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="titleTask">Nom de la sous-tâche :</label>
                <input type="text" class="form-control" id="nameFeature" name="name" placeholder="Nom de la sous-tâche" value="{{ $features->name }}">
            </div>
            <button type="submit" class="btn float-right btn-warning">Enregistrer</button>
        </form>
    </div>
</div>
@endsection