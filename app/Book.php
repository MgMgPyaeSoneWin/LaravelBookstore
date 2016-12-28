<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'books';

    public function author() {
        return $this->belongsTo('App\author','author_id');
    }

    public function genre() {
        return $this->belongsTo('App\genre','genre_id');
    }

    public function publisher() {
        return $this->belongsTo('App\publisher','publisher_id');
    }
}
