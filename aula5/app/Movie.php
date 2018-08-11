<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Genre;

class Movie extends Model
{
    protected $fillable = ['title', 'rating', 'awards', 'length', 'release_date', 'genre_id'];

    public function genres()
    {
      return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    public function actors()
    {
      return $this->belongsToMany(Actor::class, 'actor_movie', 'movie_id', 'actor_id');
    }
}
