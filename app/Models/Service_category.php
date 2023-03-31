<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_category extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_category_name',
    ];


    public function servicecategory()
    {
        return $this->hasMany(Service::class, 'service_category_id','id');
    }
}
