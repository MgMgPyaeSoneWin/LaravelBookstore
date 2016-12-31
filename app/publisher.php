<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    //
    protected $table = 'publisher';
    public function book() {
        return $this->hasMany('app\Book','publisher_id');
    }
}
