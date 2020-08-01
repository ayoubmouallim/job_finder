<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Category;
use App\Models\Location;
use App\Models\Type;

class jobController extends Controller
{
    //jobFinder.want-job
public function jobForm(){

$categories=Category::get();
$locations=Location::get();
$types=Type::get();

return view('jobFinder.want-job',compact('categories','locations','types'));
}



public function index(){

$jobs=Job::with('categories')->find(1);
$categories=Category::get();

return $categories;

}


public function getJobs(Request $request){

 $jobs=Job::with('categories',function($q){
     $q->where('category_id',$request->category_id);
 })->get();
return $jobs;
}
  



}
