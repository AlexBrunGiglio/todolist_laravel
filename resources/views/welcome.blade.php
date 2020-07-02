<!doctype html>
<html lang="en">
    <head>
        <title>Home Todolist</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color : #f4f6ff;
        }
        .card-body {
            border-radius: 5px 5px 0px 0px;
        }
        .left-card {
            background-color: #ffcb74;
        }
        .centered-card {
            background-color: #ea907a;
        }
        .right-card {
            background-color: #4f8a8b;
            color: #f4f6ff;
        }
        .card {
            border-radius: 5px;
            border-color: transparent;
        }
    </style>
    </head>
  <body>
    <div class="container">
        <div class="text-center mt-3">
            <h1>Affichage de votre todolist</h1>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4 mt-2">
                <div class="card">
                    <div class="card-body left-card">
                        <h4 class="card-title">Tâche 1</h4>
                        <p class="card-text">Description tâche...</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check1">
                                <label class="custom-control-label" for="check1">Feature 1</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check2">
                                <label class="custom-control-label" for="check2">Feature 2</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check3">
                                <label class="custom-control-label" for="check3">Feature 3</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <div class="card">
                    <div class="card-body centered-card">
                        <h4 class="card-title">Tâche 2</h4>
                        <p class="card-text">Description tâche...</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check4">
                                <label class="custom-control-label" for="check4">Feature 1</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check5">
                                <label class="custom-control-label" for="check5">Feature 2</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check6">
                                <label class="custom-control-label" for="check6">Feature 3</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 mt-2">
                <div class="card">
                    <div class="card-body right-card">
                        <h4 class="card-title">Tâche 3</h4>
                        <p class="card-text">Description tâche...</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check7">
                                <label class="custom-control-label" for="check7">Feature 1</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check8">
                                <label class="custom-control-label" for="check8">Feature 2</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check9">
                                <label class="custom-control-label" for="check9">Feature 3</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>