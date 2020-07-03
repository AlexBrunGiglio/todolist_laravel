<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //
    protected $fillable = ['name', 'etat'];

    public function task()
    {
        return $this->belongsTo('App\Task');
    }
}
