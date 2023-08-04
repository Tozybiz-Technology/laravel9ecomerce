<?php

namespace App\Models;
use  App\Models\orderItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable=[
            'id',
            'user_id',
            'fname',
            'lname',
            'email',
            'phone',
            'country',
            'city',
            'zipcode',
            'payment_mode',
            'payment_id',
            'address',
            'message',
            'status',
            'tracking_no',
];

public function orderitems(){
    return $this->hasmany(orderItem::class);
}
}
