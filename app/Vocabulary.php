<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $table = 'vocabulary';

    protected $fillable = [
      'id','en','vi'
    ];
}
