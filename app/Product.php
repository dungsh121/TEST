<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
    	'name', 'price'
    ];
    protected $table = 'products';
    protected $guarded = ['id'];
}
