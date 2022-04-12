<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','country','email','phone','orderpackage_id'];


    public function purshase(){
        return $this->HasMany(purshase::class,'supplier_id');
      }
}
