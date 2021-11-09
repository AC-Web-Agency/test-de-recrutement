@extends('layouts.app')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
    <div class="row jumbotron">
        <form method="post" class="col-8 mx-auto" action="{{ action([App\Http\Controllers\FilmController::class, 'update'], ['id' => $film->id]) }}">
            <h3 class="mx-auto py-3">Editer <b>"{{$film->name}}"</b></h3>
            @csrf
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{$film->name}}"/>
            </div>
            <div class="form-group">
                <label for="release_date">Année:</label>
                <input type="number" min="1900" max="2099" class="form-control form-control-lg" id="release_date" name="release_date" value="{{$film->release_date}}"/>
            </div>
            <div class="form-group">
                {{$film->genre}}
                <label for="genre">Genre:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="aventure" value="aventure" {{($film->genre == "aventure" ? 'checked' : '') }}>
                    <label class="form-check-label" for="aventure">Aventure</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="drame" value="drame" {{($film->genre == "drame" ? 'checked' : '') }}>
                    <label class="form-check-label" for="drame">Drame</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="horreur" value="horreur" {{($film->genre == "horreur" ? 'checked' : '') }}>
                    <label class="form-check-label" for="horreur">Horreur</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="policier" value="policier" {{($film->genre == "policier" ? 'checked' : '') }}>
                    <label class="form-check-label" for="policier">Policier</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="science-fiction" value="science-fiction" {{($film->genre == "science-fiction" ? 'checked' : '') }}>
                    <label class="form-check-label" for="science-fiction">Science-Fiction</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="thriller" value="thriller" {{($film->genre == "thriller" ? 'checked' : '') }}>
                    <label class="form-check-label" for="thriller">Thriller</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Modifier le film</button>
        </form>
    </div>
</div>
@endsection