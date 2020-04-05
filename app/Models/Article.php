<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

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
    protected $fillable = [
        'author_id',
        'title',
        'body',
        'publish_date',
        'state',
        'short_summary',
        'slug',
        'type',
        'upvotes',
        'downvotes',
        'category_id',
    ];
    protected $dates = [
        'publish_date',
    ];

    public $timestamps = true;

    public const PUBLISHED = 'published';
    public const DRAFT = 'draft';
    public const PLANNED = 'planned';
    public const REVIEW = 'review';

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Mutate slug attribute.
     *
     * @param string|null $slug
     */
    public function setSlugAttribute(?string $slug)
    {
        $this->attributes['slug'] = Str::slug($slug);
    }
}
