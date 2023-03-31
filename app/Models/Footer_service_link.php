<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer_service_link extends Model
{
    use HasFactory;

    protected $fillable = [
        'link_name',
        'link_url',
    ];
}
