<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table="users";
    protected $primaryKey="userId";
    public $incrementing=false;
    public function products()
    {
    	return $this->belongsToMany(Product::class );
    }
}
