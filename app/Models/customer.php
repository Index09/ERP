<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','country','email','phone','orderpackage_id'];

    public function payments(){
        return $this->hasMany(sellorderpayments::class);
    }
    public function sellorders(){
        return $this->hasMany(sellorder::class);
    }

    
}
