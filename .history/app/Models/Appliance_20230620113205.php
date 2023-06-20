<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appliance extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'brand_name',
        'product_name',
        'group_name',
        'variant_name',
        'image_after_url',
        'image_before_url'
    ];
}
