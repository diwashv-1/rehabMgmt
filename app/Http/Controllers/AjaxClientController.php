<?php

namespace App\Http\Controllers;

use App\Model\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AjaxClientController extends Controller
{
    public function index(){
        return view('Client.clientdetails');
    }

    public function fetchClient()
    {
        return response()->json([
            'clients' => Client::all(),
        ], 200);
    }
}
