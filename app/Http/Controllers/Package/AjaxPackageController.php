<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use App\Model\Package;
use Illuminate\Http\Request;

class AjaxPackageController extends Controller
{

    public function getPackageDetail()
    {
        $packageDetail = Package::all();

        return response()->json([
            'packageDetail' => $packageDetail
        ]);
    }

    //
}
