<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $table = 'technologies';

    protected $fillable = ['title', 'icon', 'description', 'big-description', 'url' ];
}
