<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Model\Client;
use App\Model\Package;
use Illuminate\Http\Request;

class FetchClientController extends Controller
{
    public function fetchClientPackage()
    {

        $client = Client::select('id', 'client_name')->get();

        $package = Package::select('id', 'package_name')->get();

        return response()->json([
            'msg' => 'success',
            'client' => $client,
            'package' => $package,
        ]);

    }

    //
}
