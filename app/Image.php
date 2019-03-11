<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table="images";
    protected $primaryKey="imageId";
    public $incrementing=false;
}
