<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $table='candidats';
    protected $fillable=[
        'id','category_id','type_id	','location_id','title','name','email'
    ];
    protected $hidden=[
        'category_id','type_id','location_id'
    
    ];
    protected $timestamp=false;





public function location()
{
    return $this->belongsTo('App\Models\location', 'location_id', 'id');
}
public function categories()
{
    return $this->belongsTo('App\Models\Category', 'category_id', 'id');
}
public function type()
{
    return $this->belongsTo('App\Models\Type', 'type_id', 'id');
}
}
