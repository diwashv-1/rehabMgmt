<?php

namespace App\Http\Controllers\Expense;

use App\Http\Controllers\Controller;
use App\Model\Client;
use App\Model\ExpenseDetail;
use Illuminate\Http\Request;

class AjaxExpenseClientController extends Controller
{
    public function fetchClientNExpenseDetail()
    {

        return response()->json([
            'clients' => Client::select('id', 'client_name')->get(),
            'expense_details' => ExpenseDetail::all(),
        ]);


    }


    //
}
