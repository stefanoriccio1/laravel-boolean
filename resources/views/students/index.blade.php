{{-- @dd($students) --}}

@extends('layouts.layout')
@section('main')

  @foreach (config('students.students') as $students)
    {{$student['nome']}}
  @endforeach
  
@endsection
