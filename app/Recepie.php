<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recepie extends Model
{
    protected $table = 'recepies';

	protected $fillable = ['name','ingredients','category'];
}
