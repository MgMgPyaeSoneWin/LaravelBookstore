<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    //
    protected $table = 'author';

    public function book() {
        return $this->hasMany('App\book');
    }
}
