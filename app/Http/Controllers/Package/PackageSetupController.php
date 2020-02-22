<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use App\Model\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Setup.packagesetup');
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
    public function store(Request $request)
    {

        $validate = $this->validate($request, [
            'package_amount' => 'required',
            'package_time' => 'required',
            'package_name' => 'required',
        ]);

        //Sort out user_id later;
        $package = Package::create([
            'user_id' => 1,
            'package_name' => $request->package_name,
            'package_amount' => $request->package_amount,
            'package_time' => $request->package_time,
        ]);

        if ($package) {
            return response()->json([
                'msg' => 'successfully added Package',
                'package'=>$package,
            ]);
        }


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
