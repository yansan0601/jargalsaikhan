<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niitlel extends Model
{
    protected $fillable = [
        'title', 'body', 'image'
    ];
}
