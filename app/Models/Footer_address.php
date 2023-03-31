<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer_address extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'address',
        'phone',
        'email',
        'copywrite_first',
        'copywrite_name',
        'copywrite_last',
        'developer_name',
        'developer_url',
        'twitter_icon',
        'twitter_url',
        'facebook_icon',
        'facebook_url',
        'instragram_icon',
        'instragram_url',
        'skype_icon',
        'skype_url',
        'linkedin_icon',
        'linkedin_url',
        
    ];
}
