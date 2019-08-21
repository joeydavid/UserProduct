<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Porfolio extends Model
{
    protected $fillable = [
        'image', 'title', 'text',
    ];
}
