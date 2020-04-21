<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    public function projects(){
        return $this->belongsTo(Project::class);
 }
}