<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property  string title
 * @property  string body
 * @property  string state
 * @property string published_date
 */
class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['author_id', 'title', 'body', 'publish_date', 'state'];
    protected $appends = ['author'];
    public $timestamps = true;

    public function getAuthorAttribute()
    {
        return $this->author();
    }

    public function author()
    {
        return $this->hasOne('App\Author');
    }

}
