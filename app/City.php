<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table="cities";
    protected $primaryKey="cityId";
    public $incrementing=false;
}
