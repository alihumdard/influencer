<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = [
        'product_id',
        'variant_name',
        'variant_value',
        'variant_price',
        'variant_cut_price',
        'variant_inventory',
        'variant_weight',
        'variant_barcode',
        'variant_sku',
        'variant_attr_image',
    ];
}
