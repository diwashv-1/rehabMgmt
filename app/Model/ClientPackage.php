<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClientPackage extends Model
{

    protected $fillable = [
        'user_id', 'client_id', 'package_id'
    ];
    //
}
