<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['title','short_description','cover_service', 'description', 'big-description', 'url' ];
}
