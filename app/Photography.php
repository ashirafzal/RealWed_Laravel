<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photography extends Model
{
    use SoftDeletes;

    protected $table = 'photography'; 
    
}