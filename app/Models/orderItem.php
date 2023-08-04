<?php

namespace App\Models;
use  App\Models\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderItem extends Model
{
   
    use HasFactory;
    protected $table='order_items';
    protected $fillable=[
            'order_id',
            'product_id',
            'quantity',
            'price',
];
public function products(){
return $this->belongsTo(product::class, 'product_id', 'id');
}

}
