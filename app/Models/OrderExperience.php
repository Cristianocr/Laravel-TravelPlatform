<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderExperience extends Model
{
    use HasFactory;


    public function order(){
        return $this->belongsTo(Order::class);
    }

    
    public function experience(){
        return $this->belongsTo(Order::class);
    }

    public function reviews()
    {
        return Review::where('order_experience_id', $this->id)->get();
    }
}
