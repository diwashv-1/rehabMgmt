<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'user_id',
        'client_name',
        'address',
        'father_name',
        'mother_name',
        'guarantor_name1',
        'guarantor_name2',
        'joined_data',
        'contact_number',
        'optional_address1',
        'optional_address2',
        'is_vip',
        'weight',
        'temperature',
        'blood_group',
        'blood_pressure',
        'created_at',
        'updated_at'
    ];

    public const zero = 0;
    public const one = 1;


    //
}
