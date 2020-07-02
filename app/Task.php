<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = 'task';
    protected $filables = ['title', 'description', 'task'];
    protected $primaryKey = 'id';
}
