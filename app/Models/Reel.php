<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'campaign_id',
        'reel_type',
        'description',
        'instagram_page',
        'tags',
        'script',
        'campaign_banner',
        'created_by',
        'updated_by',
    ];
}
