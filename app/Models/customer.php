<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table='customer';
    protected $primaryKey='customerid';
    protected $fillable=[
        'customerid',
        'name',
        'email',
        'phone',
        'address'
    ];
    public $timestamps=false;
}

