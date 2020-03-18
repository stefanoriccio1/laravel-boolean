<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //
    public function index(){

      $students=config('students.students');
      // dd($students);
      return view('staticpages.index');
    }
    public function privacy(){

      return view('staticpages.privacy');

    }
    public function faq(){
      return view('staticpages.faq');
    }
}
