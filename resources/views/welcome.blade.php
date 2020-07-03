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
                    <p>Id tâche :{{ $task->id }} </p>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($task->features as $feature)
                    <li class="list-group-item">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="feature{{ $feature->id }}">
                            <label class="custom-control-label" for="feature{{ $feature->id }}">{{ $feature->name }}</label>
                        </div>
                    </li>
                    @endforeach
                    {{-- <li class="list-group-item">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="check1">
                            <label class="custom-control-label" for="check1"></label>
                        </div>
                    </li> --}}
                </ul>
                <form action="{{ url('features/create') }}" method="POST">
                    @csrf
                    <div class="form-group ml-2 mr-2 border-top">
                        <label for="titleTask">Nom de la tâche :</label>
                        <input type="text" class="form-control" id="name_feature" name="name" placeholder="Nom de la tâche">
                        <input type="hidden" name="task" value="{{ $task->id }}"> 
                    </div>          
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
