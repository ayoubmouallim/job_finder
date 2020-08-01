<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table='jobs';
    protected $fillable=[
        'id','category_id','type_id	','location_id','title','company','price','updated_at','created_at','description'
    ];
    protected $hidden=[
        'updated_at','created_at','type_id','location_id'
    ];





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
