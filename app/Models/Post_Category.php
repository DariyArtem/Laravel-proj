<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Category extends Model
{
    use HasFactory;

    protected $table = 'post_category';

    protected $fillable = [
        "category_id",
        "post_id",
    ];
}
