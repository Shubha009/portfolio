<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'blog_category_title',
    ];
    

    public function postcategory()
    {
        return $this->hasMany(BlogPost::class, 'blog_category_id','id');
    }
}
