<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table='locations';
    protected $fillable=[
        'id','location'
    ];
    protected $hidden=[];
    public $timestamps=false;


public function jobs()
{
    return $this->hasMany('App\Models\Job', 'location_id', 'id');
}

}
