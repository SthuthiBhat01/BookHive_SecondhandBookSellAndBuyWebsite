<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="{{asset('cssfile/registration.css')}}">
</head>
<style>
.lmsg{
  margin-right: 1rem;
  text-align: right;
  font-weight:bolder;
}
</style>
<body>
  

 

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
<form  action="{{route('registration.post')}}" method="POST"class="ms-auto me-auto mt-auto" style='width: 550px'>
@csrf

  <div class="mb-3">
    
  <label class="form-label">FullName</label>
    <input type="text" class="form-control"  name="name">
    </div>
    <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password" >
  </div>
  <div class="wrap">
  <button type="submit" class="button">Submit</button>
</div>
<div class="lmsg">
  <p>If you  have an account, <a href="{{route('login')}}">Login here</a></p>
</div>
</form>

</div>

@endsection
</body>
</html>
