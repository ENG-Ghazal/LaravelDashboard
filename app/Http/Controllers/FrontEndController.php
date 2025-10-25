<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontEndController extends Controller
{
  public function viewDepartment(){

     //$departmentData = Http::get('')->json(); here we pass the url of the api to get json data about department

      $departmentData =
        [  "id" => 1,
            "title"=> "first department ",
            "description"=> "description for the first department ",
            "category_id"=> 1,
            "created_at"=> null,
            "updated_at"=> null,
            "category"=> [
                   "id"=> 1,
                   "name"=> "cate1",
                   "description"=> "cate1description",
                   "number"=> 1,
                   "created_at"=> "2021-11-02T12:27:19.000000Z",
                   "updated_at"=> "2021-11-02T12:27:19.000000Z"
            ]
        ];

      return view('index',['departmentData' => $departmentData]);

  }
}
