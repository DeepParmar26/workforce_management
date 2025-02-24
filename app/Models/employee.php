<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table='employee';
    protected $primaryKey='empid';
    protected $fillable=[
        'empid',
        'name',
        'email',
        'password',
        'phoneno',
        'department'
    ];
    public $timestamps=false;
}
