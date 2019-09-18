<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    public $fillable = ['parent_id', 'name', 'hidden'];

    protected $table = 'categories';

    public function articles() {
        return $this->hasMany('App\Article');
    }

    public function public_articles()
    {
        return $this->articles()->where('state', Article::PUBLISHED);
    }
}
