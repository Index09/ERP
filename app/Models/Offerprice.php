<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offerprice extends Model
{
    use HasFactory;
    protected $fillable = ['orderpackage_id','customer_id','overall','discount','taxes'];

    public function offerprice_items(){
        return $this->hasMany(offerprice_item::class,'offerprice_id');
    }
    public function customer(){
        return $this->belongsTo(customer::class,'customer_id');
    }
}

