<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    public $fillable = ['parent_id', 'name', 'hidden'];

    protected $table = 'categories';
}
