<?php

namespace App\Observers;

use App\Article;
use App\Author;
use Carbon\Carbon;

class ArticleObserver
{
    public function creating(Article $article)
    {
        $user = auth()->user();
        if ($user !== null) {
            $article->author_id = $user->author->id;
        } else {
            $article->author_id = Author::first()->id;
        }

        if ($article->slug === null || empty($article->slug)) {
            $article->slug = $article->title;
        }

        if ($article->state === Article::PUBLISHED) {
            $article->publish_date = Carbon::now()->toDateTimeString();
        }
    }
}
