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
      $students = config('students.students');

      $result = [
        'error' => '',
        'response' => []
      ];

      if(in_array($data['gender'], $genders)){
        if($data['gender'] == 'all'){
          $result['response'] = $students;
          return response()->json($result);

        }
        // if($data['gender'] == m){
        //
        // } else if($data['gender'] == f)){
        //
        // }
      }

    }
}
