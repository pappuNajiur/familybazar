<?php

namespace App\customer;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customerName', 'CustomerPhoneNumber', 'CustomerEmail',
    ];
}

