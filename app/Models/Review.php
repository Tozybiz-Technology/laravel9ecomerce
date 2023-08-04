<?php

namespace App\Models;
use App\Models\User;
use App\Models\product;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table='reviews';
    protected $fillable=[
             'id',
            'user_id',
            'product_id',
            'user_review',
];

public function user(){
return $this->belongsTo(User::class);
}


public function ratings(){
    return $this->belongsTo(Rating::class, 'user_id', 'user_id');
    }

    public function product(){
        return $this->belongsTo(product::class, 'product_id', 'id');
        }
    

}
