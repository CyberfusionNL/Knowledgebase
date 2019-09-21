<?php

use App\Article;
use Illuminate\Support\Arr;

function selected($value, $key) {
    return ($value == $key) ? 'selected' : '';
}

function hasTwofactor(\App\User $user) {
    return $user->twofactor_secret !== '';
}

function getCategories() {
    $current = request()->route()->parameter('type');
    $types = ['explore', 'learn', 'changes'];
    $arr = [];
    foreach($types as $type) {
        if ($type !== $current) {
            $arr[] = $type;
        }
    }
    return $arr;
}

function getRouteForCategory($category) {
    //  route('article', ['type' => 'explore', 'slug' => $explore]
    $type_slugs = [
        'explore' => '',
        'learn' => '',
        'changes' =>''
    ];
    $type = request()->route()->parameter('type');
    if(!in_array($type, array_keys($type_slugs))) return '';
    return route('article', ['slug' => getSlugForType($category), 'type' => $category]);
}

function getSlugForType($category = null) {
    $type_slugs = [
        'explore' => '',
        'learn' => '',
        'changes' =>''
    ];

    try {
        $type_slugs['explore'] = Article::where('type', 'explore')->where('state', Article::PUBLISHED)->first()->slug;
    } catch (Exception $e) {}
    try {
        $type_slugs['learn'] = Article::where('type', 'learn')->where('state', Article::PUBLISHED)->first()->slug;
    } catch (Exception $e) {}
    try {
        $type_slugs['changes'] = Article::where('type', 'changes')->where('state', Article::PUBLISHED)->first()->slug;
    } catch (Exception $e) {}

    if (!$category == null && in_array($category, array_keys($type_slugs))) return $type_slugs[$category];

    return $type_slugs;
}
