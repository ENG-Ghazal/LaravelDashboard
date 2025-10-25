<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Http\Resources\DepartmentResource;

class APIController extends Controller
{
    public function testApi(){
        return 'test';

    }
   public function getDepartmentInfo($id){
     //  $department = Department::with('category')->find($id);//->get();
       $department = Department::with(['category']);
       return DepartmentResource::collection($department->paginate(50))->response();
      // return new DepartmentResource(Department::findOrFail($id));
       //return response()->json($department);
   }
    public function addDepartmentInfo(Request $request){
        request()->validate([
                  'title' => 'required',
                  'description' => 'required',
              ]);
        $result =  Department::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);//$department->save();
        if($result){
            return ["result" => "add successfully "];
        }
        else{
            ["result" => "add fail "];
        }

    }
}
