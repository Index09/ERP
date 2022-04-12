<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class income extends Model
{
    use HasFactory;
    protected $fillable = ['value','incometype_id','customer_id','orderpackage_id'];
    public function type(){

        return $this->hasOne(incometype::class);
    }
}


