<?php

namespace App\Http\Controllers\Expense;

use App\Http\Controllers\Controller;
use App\Model\ExpenseDetail;
use Illuminate\Http\Request;

class AjaxExpenseController extends Controller
{
    public function getExpenseDetail()
    {
        $expenseDetail = ExpenseDetail::all();
        return response()->json([
            'expenseDetail' => $expenseDetail,

        ]);
    }

    //
}
