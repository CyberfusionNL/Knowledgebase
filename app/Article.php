<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string title
 * @property string body
 * @property string state
 * @property string publish_date
 * @property string short_summary
 * @property int author_id
 * @property string slug
 */
class Article extends Model
{
    use SoftDeletes;

    protected $table = 'articles';
    protected $fillable = ['author_id', 'title', 'body', 'publish_date', 'state', 'short_summary', 'slug', 'type', 'upvotes', 'downvotes'];
    protected $appends = ['author'];
    public $timestamps = true;

    public const PUBLISHED = 'published';
    public const DRAFT = 'draft';
    public const PLANNED = 'planned';
    public const REVIEW = 'review';

    public function getAuthorAttribute()
    {
        return $this->author();
    }

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
