<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['author_id', 'title', 'body'];
    protected $appends = ['author'];

    public function getAuthorAttribute()
    {
        return $this->author();
    }

    public function author()
    {
        return $this->hasOne('App\Author');
    }

}
