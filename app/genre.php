<?php

namespace App;
use app;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    //
    protected $table = 'genre';

    public function book() {
        return $this->hasMany(Book::class);
    }
}
