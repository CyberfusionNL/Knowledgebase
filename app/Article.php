<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 * @property string body
 * @property string state
 * @property string publish_date
 * @property string short_summary
 * @property integer author_id
 */
class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['author_id', 'title', 'body', 'publish_date', 'state', 'short_summary'];
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
