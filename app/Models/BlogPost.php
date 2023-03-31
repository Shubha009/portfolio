<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'blog_category_id',
        'blog_post_title',
        'blog_description',
        'tags',
        'blog_image',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id','id');
    }




}
