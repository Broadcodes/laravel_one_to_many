<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'slug', 'category_id'];

    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
