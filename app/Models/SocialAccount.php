<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'platform', 
        'username',
        'profile_url',
        'followers_count',
        'bio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
