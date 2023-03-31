<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'designation',
        'image',
    ];
}
