<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    protected $primaryKey="productId";
    public $incrementing=false;
    public function images()
    {
    	return $this->hasMany(Image::class , 'product_id');
    }
    public function reviews()
    {
    	return $this->hasMany(Review::class , 'product_id');
    }
     public function brand()
    {
        return $this->belongsTo(Brand::class , 'brand_id');
    }
}
