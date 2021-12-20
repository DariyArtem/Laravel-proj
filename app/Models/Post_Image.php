<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Image extends Model
{
    use HasFactory;
    protected $table = 'post_images';

    protected $fillable = [
        "img_path",
        "post_id",
    ];

}
