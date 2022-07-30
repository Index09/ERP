<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderpackage extends Model
{
    use HasFactory;


    public function customers(){
        return $this->hasMany(customer::class,'orderpackage_id');
    }
    public function suppliers(){
        return $this->hasMany(supplier::class,'orderpackage_id');
    }
    public function purshases(){
        return $this->hasMany(purshase::class,'orderpackage_id');
    }
    public function settings(){
        return $this->hasOne(setting::class);
    }
    public function invintories(){
        return $this->hasMany(invintory::class);
    }
    public function products(){
        return $this->hasMany(product::class);
    }
    public function sellorders(){
        return $this->hasMany(sellorder::class);
    }
    public function offerprices(){
        return $this->hasMany(sellorder::class);
    }
    
}
