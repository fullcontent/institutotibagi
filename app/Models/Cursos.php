<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    //
    public function images()
    {
    	return $this->hasMany('App\Models\Image','post_id');
    }
}
