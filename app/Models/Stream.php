<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    protected $fillable = ['name', 'type', 'options'];
    protected $casts = ['options' => 'array'];
}
