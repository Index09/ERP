<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purshase extends Model
{
    use HasFactory;

 
    public function supplier(){
        return $this->belongsTo(supplier::class,'supplier_id');
    }
    public function purchaseitem(){

        return $this->hasMany(purchaseitem::class,'purchase_id');
    }
   
      
}
