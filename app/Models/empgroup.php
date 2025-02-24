<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class empgroup extends Model
{
    protected $table='empgroup';
    protected $primaryKey='empgrpid';
    protected $fillable=[
        'empgrpid',
        'groupname',
        'description'
    ];
    public $timestamps=false;
}
