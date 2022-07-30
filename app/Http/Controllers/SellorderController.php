<?php

namespace App\Http\Controllers;

use App\Models\income;
use App\Models\orderpackage;
use App\Models\sellorder;
use App\Models\sellorderpayments;
use App\Models\sellordersetting;
use App\Models\sellorder_items;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellorderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function print($id) {

        $sellorder = sellorder::where('id', $id)->with(['customer', 'sellorder_items', 'sellorderpayments'])->first();

        return view('print.sellorder')->with(['sellorder' => $sellorder]);

    }

    public function sellordergetcash(request $request)
    {

        $sellorder = sellorder::find($request->id);
        $sellorder->paied += $request->cash;
        $sellorder->save();
        income::create([
            'value' => $request->cash,
            'customer_id' => $sellorder->customer_id,
            'incometype_id' => 3, // يعنى تحصيل مبيعات تقسيط !!
            'orderpackage_id' => auth()->user()->orderpackage->id,
        ]);

        return response()->json(200);

    }
    public function getmonthsells() // Get sells  by months

    {
        $orderpackage_id = auth()->user()->orderpackage->id;
        $sellmonths = DB::select(
            DB::raw('SELECT sum(overall) as sells from sellorders WHERE YEAR(created_at) = 2022

             and orderpackage_id = ' . $orderpackage_id . '


             GROUP BY month(created_at) ', ) //المفروض هنا ميتين ام مونث  بس انا بجرب بس !!
        );

        return response()->json(['sellsmonths' => $sellmonths]);

    }

    public function view()
    {
        return view('sellorder.view');
    }

    public function get()
    {
        $sellorders = sellorder::where('orderpackage_id', auth()->user()->orderpackage->id)
            ->with(['customer:id,name'])
            ->withsum(['sellorder_items'], 'quantity')
            ->orderby('created_at', 'asc')
            ->paginate(10);

        $lastmounth = Carbon::now()->subMonth()->format('Y-m-d h:m:s');
        $now = Carbon::now()->format('Y-m-d h:m:s');

        $lastmounthtotal = db::select('select count(*) as lastmonthtotal from `sellorders`
       where sellorders.orderpackage_id  = ' . auth()->user()->orderpackage->id . ' and created_at between '
            . "'" . $lastmounth . "'" . ' and ' . "'" . $now . "'" . '');

        $lastmounthtotalvalue = db::select('select sum(overall) as lastmounthtotalvalue from `sellorders`
       where sellorders.orderpackage_id  = ' . auth()->user()->orderpackage->id . ' and created_at between '
            . "'" . $lastmounth . "'" . ' and ' . "'" . $now . "'" . '');

        $sum = auth()->user()->orderpackage->sellorders->sum('overall'); //total value of sell orders
        return response()->json(['sellorders' => $sellorders, 'sum' => $sum,

            'lastmonthtotal' => $lastmounthtotal[0]->lastmonthtotal,

            'lastmonthtotalvalue' => $lastmounthtotalvalue[0]->lastmounthtotalvalue,

        ]);

    }
    public function sellorder_create(Request $request)
    {

        $orderpackage_id = auth()->user()->orderpackage_id;

        $request->precantage = $request->precantage ? $request->precantage : 0;

        $sellordercr = sellorder::create([
            'customer_id' => $request->customer_id,
            'orderpackage_id' => $orderpackage_id,
            'overall' => ($request->overall - $request->paied) * (($request->precantage / 100) + 1) + $request->paied,
            'paied' => $request->paied,
        ]);
        $products = json_decode($request->products);
        foreach ($products as $product) {
            sellorder_items::insert([
                'orderpackage_id' => $orderpackage_id,
                'sellorder_id' => $sellordercr->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $product->quantity,
            ]);
        }

        income::create([
            'value' => $request->paied,
            'customer_id' => $request->customer_id,
            'incometype_id' => 2, // يعنى تحصيل مبيعات تقسيط !!
            'orderpackage_id' => auth()->user()->orderpackage->id,

        ]);
        //update cash

        $order = orderpackage::find(auth()->user()->orderpackage_id);
        $order->cash += $request->paied;
        $order->save();

        return $sellordercr;

    }

    public function sellorderwapy_create(Request $request)
    {

        $sellordercr = $this->sellorder_create($request);

        sellordersetting::insert([

            'sellorder_id' => $sellordercr->id,
            'precantage' => $request->precantage,
            'months' => $request->months,
        ]);

        for ($i = 1; $i <= $request->months; $i++) {
            sellorderpayments::insert([

                'sellorder_id' => $sellordercr->id,
                'customer_id' => $request->customer_id,
                'value' => floor((($request->overall - $request->paied) * (1 + $request->precantage / 100)) / $request->months),
                'payat' => Carbon::now()->addMonth($i),

            ]);

        }

    }
    public function getsellorders($id)
    {

        $sellorder = sellorder::where('customer_id', $id)->with(['sellorder_items'])->orderby('created_at', 'desc')->get();
        return response()->json(['sellorder' => $sellorder]);
    }
    public function index()
    {

        return view('sellorder.create');

    }
    public function indexwpay()
    {

        return view('sellorder.createwithpay');

    }
}
