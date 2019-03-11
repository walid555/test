<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    protected $primaryKey="categoryId";
    public $incrementing=false;
    public function brands()
    {
    	return $this->belongsToMany(Brand::class);
    }
    public function products()
    {
    	return $this->hasMany(Product::class , 'category_id');
    }
}
