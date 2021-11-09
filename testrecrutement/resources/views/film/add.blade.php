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
        <form method="post" class="col-8 mx-auto" action="{{url('/add/film')}}">
            <h3 class="mx-auto py-3">Ajouter un film</h3>
            @csrf
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control form-control-lg" id="name" name="name"/>
            </div>
            <div class="form-group">
                <label for="release_date">Année:</label>
                <input type="number" min="1900" max="2099" class="form-control form-control-lg" id="release_date" name="release_date"/>
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="aventure" value="aventure" checked>
                    <label class="form-check-label" for="aventure">Aventure</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="drame" value="drame">
                    <label class="form-check-label" for="drame">Drame</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="horreur" value="horreur">
                    <label class="form-check-label" for="horreur">Horreur</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="policier" value="policier">
                    <label class="form-check-label" for="policier">Policier</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="science-fiction" value="science-fiction">
                    <label class="form-check-label" for="science-fiction">Science-Fiction</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="thriller" value="thriller">
                    <label class="form-check-label" for="thriller">Thriller</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter un film</button>
        </form>
    </div>
</div>
@endsection