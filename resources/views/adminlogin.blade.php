<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{asset('cssfile/login.css')}}">
  
  
</head>
<body class="oneo">

@extends('layout')
@section('content')


<div class="mt-5">
        @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            
            @endforeach
        </div>
        @endif

        @if(session()->has ('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
      
        @if(session()->has ('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
          </div>
          <div class="container123">

          <div class="red">
          
          <div class="alert" role="alert" >
            <form action="{{ route('adminLoginPost') }}" method="POST" class="ms-auto me-auto mt-auto" style='width: 550px'>
@csrf
<div class="signupmsg">
<p>If you don't have an account, <a href="{{route('adminDisplay')}}">Sign up here</a></p>
</div>
<div claa="demo__text">
<div class="form-group">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" >
  </div>
  </div>
  <div class="form-group">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password" >
  </div>
  <div class="wrap">
  <button type="submit" class="button">Submit</button>
  </div>
 
</form>
</div>
        </div>
        </div>
        </body>
</html>



  
@endsection
