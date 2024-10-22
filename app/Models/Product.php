<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'cut_price',
        'price',
        'stock',
        'SKU',
        'barcode',
        'weight',
        'stock_status',
        'short_description',
        'description',
        'main_image',
        'product_images',
        'created_by',
    ];

    protected $casts = [
        'product_images' => 'array',
    ];

    function campaign()
    {
        return $this->belongsToMany(Compaign::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
