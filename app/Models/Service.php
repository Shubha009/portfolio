<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_category_id',
        'title',
        'description',
        'icon',
    ];

    public function service_cat()
    {
        return $this->belongsTo(Service_category::class, 'service_category_id','id');
    }
}
