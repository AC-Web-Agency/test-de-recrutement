<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'release_date', 'genre', 'user_id'];

    public function saveFilm($data)
    {     
        $this->name = $data['name'];
        $this->release_date = $data['release_date'];
        $this->genre = $data['genre'];
        $this->user_id = auth()->user()->id;
        $this->save();
        return 1;
    }

    public function updateFilm($data)
    {
        $film = $this->find($data['id']);
        $film->user_id = auth()->user()->id;
        $film->name = $data['name'];
        $film->release_date = $data['release_date'];
        $film->genre = $data['genre'];
        $film->save();
        return 1;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
