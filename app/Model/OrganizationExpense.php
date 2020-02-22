<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrganizationExpense extends Model
{
    protected $fillable = [
        'date', 'narration', 'amount', 'expense_detail_id'

    ];


    //
}
