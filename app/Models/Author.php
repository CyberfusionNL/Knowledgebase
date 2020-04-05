<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $fillable = ['user_id', 'name', 'surname', 'organisation', 'bio'];
    protected $appends = ['user'];
    public $timestamps = false;

    public function getUserAttribute()
    {
        return $this->user();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
