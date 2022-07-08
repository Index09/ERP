<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
    use HasFactory;

    public function type(){

        return $this->belongsTo(expensetype::class,'expense_id');

    }
}
