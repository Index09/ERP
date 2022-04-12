<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\orderpackage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('packageexpired');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        
        
        if(auth()->user()->orderpackage->expire < date('Y-m-d')){
           return 'الباقه انتهت';
        }
        return view('dashboard');
    }

    public function addcash(Request $request){
     $order =  orderpackage::find(auth()->user()->orderpackage_id);
     $order->cash += $request->cash;
     $order->save();
     
     return response()->json('done',200);

    }
    public function getpackagesetting(){

        $settings = auth()->user()->orderpackage->settings;

        return response()->json(['setting'=>$settings]);
    }
}
