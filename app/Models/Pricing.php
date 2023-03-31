<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'featured',
        'advanced',
        'amount',
        'time',
        // 'feture_list_id'
         'feture_list_id' =>'array'
        
    ];

    public function category()
    {
        return $this->belongsTo(Pricing_category::class, 'category_id','id');
    }

    public function feturelist()
    {
        return $this->belongsTo(Feture_list::class, 'feture_list_id','id');
    }
}
