<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\advertisers;

class AdvertiserController extends Controller
{
    public function create(request $request){
        $this->validate($request,[
          'name'=>['required','string','max:255'],
          'phone'=>['string','max:255'],
          'email'=>['string','max:255'],
          'address'=>['string','max:255'],
          'percentage'=>['required','numeric'],
        ]);
  
  
        advertisers::insert([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'address'=>$request->phone,
        'email'=>$request->email,
        'percentage'=>$request->percentage,
      ]);
  
      return response()->json(['code'=>200]);
  
  
  
  
  
      }
  
}
