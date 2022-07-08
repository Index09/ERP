<?php

namespace App\Http\Controllers;

use App\Models\income;
use App\Models\sellorderpayments;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {

        $payment = sellorderpayments::find($request->payment_id);
        $payment->is_paied = 1;
        $payment->save();
        income::create([
            'value' => $payment->value,
            'customer_id' => $payment->customer_id,
            'incometype_id' => 1, // يعنى تحصيل مبيعات تقسيط !!
            'orderpackage_id' => auth()->user()->orderpackage->id,

        ]);

    }
}
