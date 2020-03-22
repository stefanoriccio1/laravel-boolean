<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  //m - f
    public function gender(Request $request){

      $data = $request->all();
      $genders = config('students.genders');

      $result >= [];
      
      if(in_array($data['gender'], $genders)){
        if($data['gender'] == m){

        } else if($data['gender'] == f)){

        }
      }
      $students = config('students.students');
    }
}
