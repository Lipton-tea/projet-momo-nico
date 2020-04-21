<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public function users(){
        return $this->belongsTo(User::class);
    }
}
