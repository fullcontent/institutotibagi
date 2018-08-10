<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public function post()
    {
    	return $this->belongsTo('App\Models\Noticias','post_id');
    }

    public function curso()
    {
    	return $this->belongsTo('App\Models\Curso','post_id');
    }
}
