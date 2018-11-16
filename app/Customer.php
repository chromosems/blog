<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer_details';

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_address',
        'customer_contact1',
        'customer_contact2'
    ];
}
