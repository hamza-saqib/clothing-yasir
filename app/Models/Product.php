<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'discount',
        'summary',
        'sort_order',
        'status',
        'description',
        'opening_qty',
        'available_qty',
        'images',
        'sizes',
        'colors',
        'brand',
        'meta_tag_title',
        'meta_tag_keywords',
        'meta_tag_description',
        'is_active',
        'product_category_id',
        'product_sub_category_id',
        'admin_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->hasOne(ProductCategory::class, 'id', 'product_category_id');
    }
}
