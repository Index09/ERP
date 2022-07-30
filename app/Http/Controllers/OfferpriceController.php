<?php

namespace App\Http\Controllers;

use App\Models\Offerprice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferpriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('offerprice.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offerprice.create');
    }

    public function getOfferprices()
    {

        $offerprices = Offerprice::select(['created_at','customer_id','overall'])->where('orderpackage_id', auth()->user()->orderpackage->id)
            ->with(['customer:id,name'])
            ->withsum(['offerprice_items'], 'quantity')
            ->orderby('created_at', 'asc')
            ->paginate(10);

        $sum = auth()->user()->orderpackage->offerprices->sum('overall'); //total value of sell orders
        return response()->json(['offerprices' => $offerprices, 'sum' => $sum,

        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $offer = Offerprice::create([
            'customer_id' => $request->customer_id,
            'discount' => $request->discount,
            'overall' => $request->overall,
            'taxes' => $request->taxes,
            'orderpackage_id' => auth()->user()->orderpackage->id,
        ]);
        $ProductsDecoded = json_decode($request->products, true);

        for ($i = 0; $i < count($ProductsDecoded); $i++) {
            $products[] = [
                'offerprice_id' => $offer->id,
                'quantity' => $ProductsDecoded[$i]['quantity'],
                'price' => $ProductsDecoded[$i]['sell_price'],
                'product_id' => $ProductsDecoded[$i]['id'],
            ];
        }

        DB::table('offerprice_items')->insert(
            $products
        );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offerprice  $offerprice
     * @return \Illuminate\Http\Response
     */
    public function show(Offerprice $offerprice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offerprice  $offerprice
     * @return \Illuminate\Http\Response
     */
    public function edit(Offerprice $offerprice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offerprice  $offerprice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offerprice $offerprice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offerprice  $offerprice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offerprice $offerprice)
    {
        //
    }
}
