<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable=[
        'id','name'
    ];
    protected $hidden=[];
    public $timestamps=false;


public function jobs()
{
    return $this->hasMany('App\Models\Job', 'category_id', 'id');
}

public function candidats()
{
    return $this->hasMany('App\Models\Candidat', 'category_id', 'id');
}




}
