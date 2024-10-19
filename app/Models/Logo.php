<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'campaign_id',
        'logo_name',
        'logo_file',
        'tags',
        'payment',
        'description',
        'instagram_page',
        'sample_video',
        'created_by',
        'updated_by',
    ];
}
