<?php

use App\Models\Article;

function selected($value, $key)
{
    return ($value == $key) ? 'selected' : '';
}

function hasTwofactor(\App\Models\User $user)
{
    return $user->twofactor_secret !== '';
}

function getCategories($col = 2)
{
    $current = request()->route()->parameter('type');
    $types = ['explore', 'learn', 'changes'];
    $arr = [];
    foreach ($types as $type) {
        if ($type !== $current) {
            $arr[] = $col.'-column.'.$type;
        }
    }

    return $arr;
}

function getRouteForCategory($category)
{
    $type_slugs = [
        'explore' => '',
        'learn' => '',
        'changes' =>'',
    ];

    return route('article', ['slug' => getSlugForType($category), 'type' => $category]);
}

function getSlugForType($category = null)
{
    $type_slugs = [
        'explore' => '',
        'learn' => '',
        'changes' =>'',
    ];

    try {
        $type_slugs['explore'] = Article::where('type', 'explore')->where('state', Article::PUBLISHED)->first()->slug;
    } catch (Exception $e) {
    }
    try {
        $type_slugs['learn'] = Article::where('type', 'learn')->where('state', Article::PUBLISHED)->first()->slug;
    } catch (Exception $e) {
    }
    try {
        $type_slugs['changes'] = Article::where('type', 'changes')->where('state', Article::PUBLISHED)->first()->slug;
    } catch (Exception $e) {
    }

    if (! $category == null && in_array($category, array_keys($type_slugs))) {
        return $type_slugs[$category];
    }

    return $type_slugs;
}

function getNextArticle(Article $current)
{
    return $current->category->public_articles->where('id', '>', $current->id)->first();
}

function hasVoted($id)
{
    return session()->exists('voted_'.$id);
}

function getVote($id)
{
    return session()->get('voted_'.$id);
}

function getVoteUrl($article, $type = 'up')
{
    return route('article', ['type' => $article['type'], 'slug' => $article['slug'], 'vote' => $type]);
}

function vote($id, $type = 'up')
{
    session()->put('voted_'.$id, $type);
}

function isActive($article, $category = null)
{
    if ($category->id == $article['category_id']) {
        return true;
    } else {
        $article = Article::find($article['id']);
        if ($article->category->parent->id == $category->id) {
            return true;
        }
    }

    return false;
}
