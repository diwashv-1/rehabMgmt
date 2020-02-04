<?php

namespace App\Http\Controllers;

use App\Model\ExpenseDetail;
use Illuminate\Http\Request;

class ExpenseDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Setup.expensessetup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ExpenseDetail  $expenseDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseDetail $expenseDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ExpenseDetail  $expenseDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseDetail $expenseDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ExpenseDetail  $expenseDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpenseDetail $expenseDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ExpenseDetail  $expenseDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseDetail $expenseDetail)
    {
        //
    }
}
