<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['title', 'description','year','address', 'url' ];



    public function images(){
        return $this->hasMany(Image::class);
    }
}
