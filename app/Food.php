<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'name',
        'type',
        'created_at',
        'updated_at'
    ];
}
