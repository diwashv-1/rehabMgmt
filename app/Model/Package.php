<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    protected $fillable = [
      'user_id', 'package_name','package_amount','package_time'

    ];

    //
}
