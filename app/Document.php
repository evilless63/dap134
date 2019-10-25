<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function article() {
        return $this->belongsToMany('App\Category');
    }
}
