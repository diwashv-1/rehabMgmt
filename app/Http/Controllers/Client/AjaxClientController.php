<?php

namespace App\Http\Controllers\Client;

use App\ClientExpense;
use App\Http\Controllers\Controller;
use App\Model\Client;
use App\Model\ClientPayment;
use Illuminate\Http\Request;

class AjaxClientController extends Controller
{


    public function fetchClientInfo(Request $request)
    {

        $clientInfo = Client::findOrfail($request->id);


        $clientExpenses = ClientExpense::where('client_id', $request->id)->get();

        $clientPayments = ClientPayment::where('client_id', $request->id)->get();

        return response()->json([
            'msg' => 'success',
            'clientInfo' => $clientInfo,
            'clientExpense' => $clientExpenses,
            '$clientPayments' => $clientPayments,
        ], 200);


    }

    //
}
