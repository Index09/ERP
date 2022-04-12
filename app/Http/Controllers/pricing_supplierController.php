<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pricing_supplier;
use App\product;
use App\term;
use App\supplier;
use App\payment_pricing;
use Validator;
class pricing_supplierController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
  

    public function index(){
      if(auth()->user()->orderpackage && auth()->user()->orderpackage->date >= date('Y-m-d')){    return view('pricing_supplier.index');
}
  
      #&& 
      #auth()->user()->role->permession->where('name','read_تسعير المورد')->count() > 0
      
    
      
      {
    return view('pricing_supplier.index');
    
    
        }
    
      }
    
      public function create(){
        if(auth()->user()->orderpackage && auth()->user()->orderpackage->date >= date('Y-m-d')){            return view('pricing_supplier.create');
}
  
        #&& 
        #auth()->user()->role->permession->where('name','add_تسعير المورد')->count() > 0
        
      
        
        {
            return view('pricing_supplier.create');
            
            
                }
      }
    
      public function insert(request $request){
        if(auth()->user()->orderpackage && auth()->user()->orderpackage->date >= date('Y-m-d')
  
     if($request->isedit){

    $oldpricig =  pricing_supplier::find($request->id);
    pricing_supplier::destroy($request->id);
    
    }
           

    $pricing_supplier = pricing_supplier::create([
        'supplier_id'=>$request->supplier_id,
        'fq'=>$request->fq,
        'code'=>$request->code,
        'tax'=>$request->tax,
        'orderpackage_id'=>auth()->user()->orderpackage->id,
        'total_amount'=>$request->total_amount,
        'discount'=>$request->discount,
        'overall'=>$request->overall,
        'pre_discount'=>$request->pre_discount,
        'tax_number'=>$request->tax_number,
    ]);
    
    
    $payment = json_decode($request->payment, true);

$a = [];
  foreach($payment as $p){
    $rules = [
          
       
      "percentage"  => "required|numeric",

     
      'name'=> "required|string|max:255",
     'note'=> "string|max:255",
     
     'amount'=> "required|numeric",
     
  ];
  $validator = Validator::make($p, $rules);
 
  if ($validator->passes()) {

      $a[] = [
          'pricing_supplier_id'=>$pricing_supplier->id,
          'percentage'=>$p['percentage'],
       'name'=>$p['name'],
      'note'=>$p['note'] ?? null,
      
      'amount'=>$p['amount'],
      
      ];

    }
      
  }

  payment_pricing::insert($a);

    $product = json_decode($request->product, true);
    foreach($product as $v){
      $field = array('quantity' => $v['pivot']['quantity']);
      $rule = array('quantity' => 'required|numeric');
  $p = product::find( $v['id']);
      $validator = Validator::make($field, $rule);
  if ($validator->passes() && $p) {

        $pricing_supplier->product()->attach($v['id'], [
            'quantity' => $v['pivot']['quantity'],
            'selling' => $v['selling'],
        ]);

      }
    
    
  }
  if($request->isedit){

    
    $pricing_supplier->created_at =  $oldpricig->created_at;
    $pricing_supplier->save();
    }
    
}
      }
      


      public function pricing_supplierjson(){
        if(auth()->user()->orderpackage && auth()->user()->orderpackage->date >= date('Y-m-d')){

return response()->json(['data'=>auth()->user()->orderpackage->pricing_supplier()->orderBy('created_at', 'DESC')->with('supplier')->paginate(10)]);

        }
    }
      


         
    public function delete($ids){
      if(auth()->user()->orderpackage && auth()->user()->orderpackage->date >= date('Y-m-d')
  
      && 
      auth()->user()->role->permession->where('name','delete_تسعير المورد')->count() > 0
      
    
      
      ){
          auth()->user()->orderpackage->pricing_supplier()->whereIn('id',explode(",",$ids))->delete();
        }
      }

      public function updatesupplierorder(request $request,pricing_supplier $pricing_supplier ){
        if(auth()->user()->orderpackage  && auth()->user()->orderpackage->date >= date('Y-m-d')){
  $pricing_supplier->update([
    
    'supplier_id'=>$request->supplier_id,

]);
              
              return response()->json('done',200);
            }
                  }



 public function pricing_supplierselect(request $request){
 if(auth()->user()->orderpackage  && auth()->user()->orderpackage->date >= date('Y-m-d')){

                $data =    auth()->user()->orderpackage->pricing_supplier()->where('id',$request->code)
                
               ->get()->take(6);

                
                return response()->json(['data'=>$data]);

    }
 }
// صفحه طباعه تسعيره مورد

  public function ps_print($id){
    if(auth()->user()->orderpackage  && auth()->user()->orderpackage->date >= date('Y-m-d')){

     

 
  
                  $data =    auth()->user()->orderpackage->pricing_supplier()->where('id',$id)->with('product')
                  ->with('supplier')
                  ->get()->take(1)[0];
                  $data->term = term::find(3);
  
                  
                  return view('print.pricing_sup')->with(['data'=> $data]);
  
  }





  }
  



                  
 public function pricing_supplierselectright($id){
  if(auth()->user()->orderpackage  && auth()->user()->orderpackage->date >= date('Y-m-d')){
 
                 $data =    auth()->user()->orderpackage->pricing_supplier()->where('id',$id)->with(['product','payment_pricing'])->first();
                
                 $sub =     supplier::find($data->supplier_id);
                 return response()->json(['data'=>$data,'sub'=>$sub]);
              
 
    }

  }
  public function edit($id){
    if(auth()->user()->orderpackage  && auth()->user()->orderpackage->date >= date('Y-m-d')){
   
                   $editdata =    auth()->user()->orderpackage->pricing_supplier()->where('id',$id)->with(['product','payment_pricing'])->first();
                  
                   $editdata->sub =     supplier::find($editdata->supplier_id);

                   

                   return view('pricing_supplier.create')->with(['editdata'=>$editdata]);
                   
                
   
      }
  
    }
}
