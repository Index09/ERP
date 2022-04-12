<?php

namespace App\Http\Controllers;

use App\Models\invintory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvintoryController extends Controller
{
    public function create(){

        return view('invintory.create');

    }
    public function insert(Request $request){
        invintory::create([

            'name' => $request->name,
            'address' => $request->address,
            'tax_number' => $request->tax_number,
            'orderpackage_id' => auth()->user()->orderpackage->id
        ]);
        return response()->json(200);
    }
    public function invintoriesview(){

        return view('invintory.view');

    }
    public function getinvintories(){
       
        $invintories = invintory::where('orderpackage_id',auth()->user()->orderpackage->id)
        ->withsum(
            ['invintory_items'],'quantity' )->get();

        return response()->json(['invintories' => $invintories]);
    }
    public function invintory_delete(Request $request){

        invintory::destroy($request->invintory_id);
        
        
        return response()->json(200);


    }



}

/*
    