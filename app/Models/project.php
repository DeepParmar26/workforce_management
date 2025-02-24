<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table='project';
    protected $primaryKey='projectid';
    protected $fillable=[
        'projectid',
        'projecttitle',
        'projectdesc',
        'startdate',
        'enddate',
        'customerid',
        'status'

    ];
    public $timestamps=false;
}
