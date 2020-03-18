<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Laravel Boolean</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <nav class= "navbar">
        <ul>
          <li><a class="{{ (Request::route()->getName() == 'static_page.home') ? 'active' : ' '}}" href="{{route('static_page.home')}}">Home</a></li>
          <li><a href="">Corso</a></li>
          <li><a class="{{ (Request::route()->getName() == 'student.index') ? 'active' : ' '}}" href="{{route('student.index')}}">Dopo Corso</a></li>
          <li><a href="">Lezione Gratuita</a></li>
          <li><a href="">Canditati Ora</a></li>
        </ul>
      </nav>
