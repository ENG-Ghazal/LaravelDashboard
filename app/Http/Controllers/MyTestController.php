<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MyTestController extends Controller
{
    public function myTest(){
      $category = Category::find(1);
      return $category->departments;
    }
    public function addUser(){

        $user = User::create([
            'name' => 'firstUser',
            'email' => 'test@gmail.com',
            'password' => Hash::make('admin')
         ] );
         return $user;
    }
}
