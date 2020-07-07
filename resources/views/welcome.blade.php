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
                    <a type="button" class="btn btn-warning float-right btn-sm" href="{{ url('edit/'.$task->id) }}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                            <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                        </svg>
                    </a>
                    <h4 class="card-title">{{ $task->title }}</h4>
                    <p class="card-text">{{ $task->description }}</p>
                    <div class="progress">
                        <div class="progress-bar bg-success w-{{ $task->div }}" role="progressbar" aria-valuenow="{{ $task->div }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($task->features as $feature)
                    <li class="list-group-item">
                        <div id="tache" class="custom-control custom-checkbox">
                                @if ($feature->etat)    
                                <input type="checkbox" onClick="window.location.reload();" name="{{ $task->id }}" class="custom-control-input" checked id="{{ $feature->id }}">
                                <label class="custom-control-label" for="{{ $feature->id }}">{{ $feature->name }}</label>
                                @else
                                <input type="checkbox" onClick="window.location.reload();" name="{{ $task->id }}" class="custom-control-input" id="{{ $feature->id }}">
                                <label class="custom-control-label" for="{{ $feature->id }}">{{ $feature->name }}</label>
                                @endif
                            <div class="float-right">
                                <form action="{{ url('features/delete/'.$feature->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <div class="float-right mr-2">
                                <a class="btn btn-warning btn-sm" href="{{ url('features/edit/'.$feature->id) }}">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                        <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                                    </svg>
                                </a>
                            </div>


                        </div>
                    </li>
                    @endforeach
                </ul>
                <form action="{{ url('features/create') }}" method="POST">
                    @csrf
                    <div class="form-group ml-2 mr-2 border-top">
                        <label class="mt-2" for="titleTask">Nom de la tâche :</label>
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
