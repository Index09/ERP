<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\sellorderpayments;
use App\Models\supplier;

class SupplierController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('packageexpired');
    }

    public function delete(request $request )
    {
      auth()->user()->orderpackage->customers()->where('id',$request->customer_id)->delete();

      return response()->json([200]);
 
      
    
    }





     public function view()
    {
      return view('supplier.create');
    }






    public function suppliers()
    {
      $suppliers = supplier::where('orderpackage_id',auth()->user()->orderpackage_id)
      //->withcount(['sellorders','payments'])
      // ->withsum(['sellorders'],'overall')
      ->orderby('created_at','asc')
      ->paginate(10);
      return response()->json(['suppliers'=>$suppliers]);
    }

    public function create (){

      return view('supplier.create');

    }

  

    public function customer_create(request $request ){
  
    
       
        customer::create([
          'name' => $request->name,
          'address' => $request->address,
          'country' => $request->country,
          'email' => $request->email,
          'phone' => $request->phone,
          'naid' => $request->naid,
          'orderpackage_id' =>auth()->user()->orderpackage->id
        
        ]);

        return response()->json('done',200);
          

    }
  
    public function getcustomer(Request $request){

      $customers = customer::where('name','like', '%' . $request->customername . '%')
      ->where('orderpackage_id',auth()->user()->orderpackage_id)->take(10)
      ->withcount(['payments'])
      ->get();
      return response()->json(['customers' => $customers]);
    }

  

    public function customeraccouning(){


      return view('customer.accounting');

    }

    public function update(request $request)
    { 

      $customernew = json_decode($request->customer);
      
      $customer = customer::find($customernew->id);

      $customer->name = $customernew->name;
      $customer->address = $customernew->address;
      $customer->phone = $customernew->phone;
      $customer->naid = $customernew->naid;
      $customer->save();
      
    }

    public function getcustomerpayments($id){
     $payments =  sellorderpayments::where('customer_id', $id)->paginate(10);
     return response()->json(['payments'=>$payments]);



    }

    public function customerjson(){
        if(auth()->user()->orderpackage && auth()->user()->orderpackage->date >= date('Y-m-d')){
      $pr = auth()->user()->orderpackage->customer()->paginate(10);
      return response()->json(['data'=>$pr]);
      
      
        }
      }

    public function customerdebetor(){
      if(auth()->user()->orderpackage && auth()->user()->orderpackage->date >= date('Y-m-d')){
    $pr = auth()->user()->orderpackage->customer()->get()->chunk(10);
    return response()->json(['data'=>$pr]);
    
    
      }
    }


  


      public function updatecustomer(request $request,customer $customer ){
        if(auth()->user()->orderpackage && auth()->user()->orderpackage->date >= date('Y-m-d')
  
        && 
        auth()->user()->role->permession->where('name','add_العملاء')->count() > 0
        
      
        
        ){
              $this->validate($request,[
                  
                  'status'=>['numeric','digits_between:1,2'],
                  'email'=>['string','max:255'],   
                  'country'=>['string','max:255'],
                'customer_name'=>['string','max:255'],
                
              ]);
              
              
              $customer->update([
                'customer_name'=>$request->customer_name,
                'status'=>$request->status,
              'country'=>$request->country,
              'comp'=>$request->comp,
              'email'=>$request->email,
              ]);
              
              return response()->json('done',200);
            }
                  }



      public function edit($id){

        $editdata =  auth()->user()->orderpackage->customer()->where('id',$id)->first();
        return view('client.addcustomer')->with(['editdata' => $editdata]);
}


}
