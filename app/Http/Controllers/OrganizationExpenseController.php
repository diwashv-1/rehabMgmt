<?php

namespace App\Http\Controllers;

use App\Model\OrganizationExpense;
use Illuminate\Http\Request;

class OrganizationExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Organizations.organizationexpenses');
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
     * @param  \App\Model\OrganizationExpense  $organizationExpense
     * @return \Illuminate\Http\Response
     */
    public function show(OrganizationExpense $organizationExpense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\OrganizationExpense  $organizationExpense
     * @return \Illuminate\Http\Response
     */
    public function edit(OrganizationExpense $organizationExpense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\OrganizationExpense  $organizationExpense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrganizationExpense $organizationExpense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\OrganizationExpense  $organizationExpense
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrganizationExpense $organizationExpense)
    {
        //
    }
}
