<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;

    

    protected $fillable = ['organization_id','name','engname','identity','phone','email','city','address','chr_diseases'
    ,'weight','country_id','blood_type','gender','height','age'
    ];

    

   
}