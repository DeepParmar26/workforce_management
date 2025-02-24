<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table='department';
    protected $primaryKey='deptid';
    protected $fillable=[
        'deptid',
        'name',
        'description'
    ];
    public $timestamps=false;
}
