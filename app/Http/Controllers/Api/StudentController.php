<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  //m - f
    public function gender(Request $request){

      $data = $request->all();
      dd($data);
    }
}
