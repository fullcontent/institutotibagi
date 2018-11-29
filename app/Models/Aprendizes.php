<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprendizes extends Model
{
    public function curso()
    {
    	return $this->belongsTo('App\Models\Cursos','curso_id');
    }
}
