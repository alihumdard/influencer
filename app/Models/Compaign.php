<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'banner',
        'influencer_type',
        'gender',
        'description',
        'promotion_type',
        'platform',
        'regions',
        'languages',
        'follower_ranges',
        'created_by',
        'updated_by',
        'is_draft',
        'current_step',
    ];
}
