<?php

namespace App\Http\Controllers;

use App\Model\Client_Package;
use App\Model\ClientPackage;
use Illuminate\Http\Request;

class ClientPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Client.registerclients');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());

        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Model\Client_Package $client_Package
     * @return \Illuminate\Http\Response
     */
    public function show(Client_Package $client_Package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Model\Client_Package $client_Package
     * @return \Illuminate\Http\Response
     */
    public function edit(Client_Package $client_Package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Model\Client_Package $client_Package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client_Package $client_Package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Model\Client_Package $client_Package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client_Package $client_Package)
    {
        //
    }
}
