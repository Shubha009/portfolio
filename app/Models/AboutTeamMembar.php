<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTeamMembar extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'designation',
        'image',
        'icon1',
        'url1',
        'icon2',
        'url2',
        'icon3',
        'url3',
        'icon4',
        'url4',
        
    ];
}
