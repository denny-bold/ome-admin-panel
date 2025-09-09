<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = ['name', 'kind', 'config'];
    protected $casts = ['config' => 'array'];
}
