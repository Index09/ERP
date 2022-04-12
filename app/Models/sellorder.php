<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sellorder extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id','orderpackage_id','overall','paied'];

    public function sellorder_items(){
        return $this->hasMany(sellorder_items::class,'sellorder_id');
    }
    public function customer(){
        return $this->belongsTo(customer::class,'customer_id');
    }
    public function sellordersetting(){
        return $this->hasOne(sellordersetting::class);
    }
    public function sellorderpayments(){
        return $this->hasMany(sellorderpayments::class,'sellorder_id');

    }
    

    
}
