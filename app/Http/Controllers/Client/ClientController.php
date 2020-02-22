<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Model\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Client/index');

        //
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
    public function store(ClientRequest $request)
    {
        dd($request->all());
        /*
                  POPULATE CLIENT TABLE
        */

        Client::create([
            'client_name' => $request->client_name,
            'address' => $request->address,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'guarantor_name1' => $request->guarantor_name1,
            'guarantor_name2' => $request->guarantor_name2,
            'joined_data' => $request->joined_date,
            'contact_number' => $request->contact_number,
            'optional_address1' => $request->optional_address1,
            'optional_address2' => $request->optional_address2,
            'is_vip' => 0,
            'weight' => $request->weight,
            'temperature' => $request->temperature,
            'blood_group' => $request->blood_group,
            'blood_pressure' => $request->blood_pressure,
        ]);

        return response()->json([
            'msg' => 'Client Added Succesfully',
        ]);


        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
