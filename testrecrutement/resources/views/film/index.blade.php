@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach($films as $film)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$film->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$film->release_date}} | {{$film->genre}} </h6>

                <a href="{{ action([App\Http\Controllers\FilmController::class, 'edit'], ['id' => $film->id]) }}" class="text-primary">Modifier</a>

                <form action="{{ action([App\Http\Controllers\FilmController::class, 'destroy'], ['id' => $film->id]) }}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="text-danger" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection