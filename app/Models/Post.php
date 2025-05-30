<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'image_path',
        'thumbnail_path',
        'status',
        'tags',
    ];

    // relationship
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function tags() {
        return $this->morphMany(Tag::class, 'taggable');
    }
}
