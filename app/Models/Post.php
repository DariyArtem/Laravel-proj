<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        "title",
        "img_path",
        "description",
        "notification",
        "content",
        "author_id",
        'video_path',
    ];

    public function categories(){
        return $this->belongsToMany(Category::class, 'post_category');
    }

}
