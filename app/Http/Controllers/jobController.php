<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Category;
use App\Models\Candidat;
use App\Models\Location;
use App\Models\Type;
use App\Http\Requests\jobRequest;

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

$categories=Category::get();
$locations=Location::get();
$types=Type::get();


return $categories;

}


public function getJobs(Request $request){

 $jobs=Job::with('categories','location','type' )->where('category_id',$request->category_id)->where('location_id',$request->location_id)->where('type_id',$request->type_id)->get();

 $categories=Category::get();
 $locations=Location::get();
 $types=Type::get();

 return view('jobFinder.want-job',compact('jobs','categories','locations','types'));
//return $jobs;
}

public function about(){
    return view('jobFinder.about');
}


public function postForm(){

    $categories=Category::get();
    $locations=Location::get();
    $types=Type::get();

    return view('jobFinder.post-job',compact('types','categories','locations'));
}

public function findCandidat(Request $request){
    
    $candidats=Candidat::with('categories','location','type' )->where('category_id',$request->category_id)->where('location_id',$request->location_id)->where('type_id',$request->type_id)->get();
    
    $categories=Category::get();
    $locations=Location::get();
    $types=Type::get();
    
    return view('jobFinder.want-job',compact('candidats','categories','locations','types'));
    // return $candidats;
}

public function saveJob(jobRequest $request){

    // rest of validation
    if($request->category_id == 0 )   
      return redirect()->back()->with([ 'category' => 'choose a category' ]);
    if($request->type_id == 0 )   
      return redirect()->back()->with([ 'type' => 'choose a job type' ]);
    if($request->location_id == 0  )   
      return redirect()->back()->with([ 'location' => 'choose a location' ]);
       
// insertion

   Job::create([
     'category_id' => $request->category_id,
     'type_id' => $request->type_id,
     'location_id' => $request->location_id,
     'title' => $request->title,
     'company' => $request->company,
     'price' => $request->price,
     'description' => $request->description,
   ]);

   return redirect()->back()->with([ 'success' => 'job added successfuly' ]);

}


}
