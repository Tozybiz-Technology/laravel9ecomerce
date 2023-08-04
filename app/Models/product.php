<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
            'id',
            'cate_id',
            'product_name',
            'slug',
            'title',
            'small_description',
            'description',
            'price',
            'discount_price',
            'image',
            'quantity',
            'available_time',
            'status',
            'trending',
            'mostpopular',
            'bestseller',
            'featured',
            'meta_title',
            'meta_keywords',
            'meta_description',
];
    public function categories(){
        return $this->belongsTo('App\Models\category', 'cate_id', 'id');

    } 
}
