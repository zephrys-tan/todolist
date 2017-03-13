<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $primarykey='id_todo';
    protected $fillable=['item'];
}
