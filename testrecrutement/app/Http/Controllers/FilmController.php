<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function home()
    {
       return view('film.home');
    }

    public function index()
    {
        $films = Film::where('user_id', auth()->user()->id)->get();
        return view('film.index',compact('films'));
    }

    public function add()
    {
       return view('film.add');
    }

    public function store(Request $request)
    {
        $film = new Film();
        $data = $this->validate($request, [
            'name'=>'required',
            'release_date'=> 'required',
            'genre'=> 'required'
        ]);
        $film->saveFilm($data);
        return redirect('/home')->with('success', 'Le film a bien été ajouté avec succès !');
    }
    public function edit($id)
    {
        $film = Film::where('user_id', auth()->user()->id)->where('id', $id)->first();
        return view('film.edit', compact('film', 'id'));
    }
    public function update(Request $request, $id)
    {
        $film = new Film();
        $data = $this->validate($request, [
            'name'=>'required',
            'release_date'=> 'required',
            'genre'=> 'required'
        ]);
        $data['id'] = $id;
        $film->updateFilm($data);
        return redirect('/home')->with('success', 'Modification du Film effectuée avec succès !');
    }
    public function destroy($id)
    {
        $film = Film::find($id);
        $film->delete();
        return redirect('/home')->with('success', 'Suppression du Film effectuée avec succès !');
    }
}
