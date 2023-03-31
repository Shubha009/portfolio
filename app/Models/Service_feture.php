<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_feture extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'icon',
    ];
    
}
