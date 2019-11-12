<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 
        'name', 
        'price', 
        'quantity', 
        'description', 
        'images', 
        'is_highlight',
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
