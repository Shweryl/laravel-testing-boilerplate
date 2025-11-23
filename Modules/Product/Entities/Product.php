<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'sku',
        'is_active',
        'image',
        'category_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function getEditButtonAttribute()
    {
        return '<a href="' . route('product.edit', $this) . '" data-toggle="tooltip" data-placement="top" title="edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>&nbsp;Edit</a>';
    }

    public function getActionButtonAttribute(){
        return $this->getEditButtonAttribute();
    }
}
