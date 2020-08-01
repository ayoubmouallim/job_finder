<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table='job_type';
    protected $fillable=[
        'id','name'
    ];
    protected $hidden=[];
    public $timestamps=false;


public function jobs()
{
    return $this->hasMany('App\Models\Job', 'type_id', 'id');
}}
