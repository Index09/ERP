<?php

namespace App\Http\Controllers;

use App\Models\income;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IncomeController extends Controller
{
    public function index()
    {
        return view('income.index');

    }
    public function incomes()
    {

        $orderpackageid = auth()->user()->orderpackage->id;
        $incomes = income::where('orderpackage_id', $orderpackageid)
            ->orderby('created_at', 'asc')
            ->with(['type:id,type', 'customer:id,name'])->paginate(15);
        return response()->json(['incomes' => $incomes]);

    }

    public function incomesdata()
    {

        $startDate = Carbon::now();
        $firstDay = $startDate->firstOfMonth();

        $firstofyear = $startDate->firstofyear();

        $orderpackageid = auth()->user()->orderpackage->id;

        $monthincomes = income::where('orderpackage_id', $orderpackageid)
            ->where('created_at', '>=', $firstDay)->sum('value');

        $yearincomes = income::where('orderpackage_id', $orderpackageid)
            ->where('created_at', '>=', $firstofyear)->sum('value');

        $monthlyincomes = DB::select(
            DB::raw('SELECT sum(value) as incomes from incomes WHERE YEAR(created_at) = 2022
             and orderpackage_id = ' . $orderpackageid . '
             GROUP BY month(created_at) ')
        );

        return response()->json(['monthincomes' => $monthincomes, 'yearincomes' => $yearincomes,

            'monthlyincomes' => $monthlyincomes]);

    }

}
