<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'portfolio_name',
        'client_name',
        'project_date',
        'project_url',
        'description',
        'image',
        
    ];
    

    public function portfolio_cat()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }
}
