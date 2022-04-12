<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory_item extends Model
{
    use HasFactory;
    
    public function product(){
        return $this->belongsTo(product::class,'product_id');
    }
    public function invintory(){
        return $this->belongsTo(invintory::class,'invintory_id');
    }
}
