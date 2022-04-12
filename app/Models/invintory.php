<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invintory extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','tax_number','orderpackage_id'];
    protected $table = 'invintories';
    public function invintory_items(){
        return $this->hasMany(inventory_item::class);
    }
}
