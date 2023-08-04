<?php

namespace App\Models;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table='carts';
    protected $primaryKey ='id';
    protected $fillable=[
        'id',
        'product_id',
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'product_title',
        'price',
        'quantity',
        'image',
];
   
public function products(){
    return $this->belongsTo(product::class,'product_id', 'id');
}
}
