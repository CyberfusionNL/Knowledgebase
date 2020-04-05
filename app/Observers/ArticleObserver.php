<?php

namespace App\Observers;

use App\Models\Article;
use App\Models\Author;
use Carbon\Carbon;

class ArticleObserver
{
    public function creating(Article $article)
    {
        $user = auth()->user();
        if ($article->author_id === null || empty($article->author_id)) {
            if ($user !== null) {
                $article->author_id = $user->author->id;
            } else {
                $article->author_id = Author::first()->id;
            }
        }

        if ($article->slug === null || empty($article->slug)) {
            $article->slug = $article->title;
        }

        if ($article->state === Article::PUBLISHED) {
            $article->publish_date = Carbon::now()->toDateTimeString();
        }
    }
}
