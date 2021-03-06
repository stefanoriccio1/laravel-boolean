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
        else {
          foreach($students as $key => $student){
            if($student['gender'] == $data['gender']){
              $result['response'][] =$student;
            }
          }
          return response()->json($result);
        }

        // elseif($data['gender'] == 'm'){
        //   foreach ($students as $student) {
        //     if($student['gender'] == 'm'){
        //       $result['response'][]= $student;
        //     }
        //   }
        //   return response()->json($result);
        // }
        // else if($data['gender'] == 'f'){
        //   foreach ($students as $student) {
        //     if($student['gender'] == 'f'){
        //       $result['response'][]= $student;
        //     }
        //   }
        //   return response()->json($result);
        // }
      }
      else{
        $result['error'] = 'Gender non esistente';
        return response()->json($result);
      }
    }
}
