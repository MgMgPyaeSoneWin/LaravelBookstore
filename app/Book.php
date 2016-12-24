<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public function author() {
        return $this->belongsTo('author');
    }

    public function genre() {
        return $this->belongsTo('genre');
    }

    public function publisher() {
        return $this->belongsTo('publisher');
    }
}
