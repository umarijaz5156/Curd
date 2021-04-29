@extends('layout')

@section('content')
<center class="login" >
<div class="col-sm-6 ">
    <br><br>
    <h1> <b> User Login Page </b></h1>
    <form method="post" action="login" >
        @csrf
   
    <div class="form-group">
          
        <label > <h4><b>Email address</b> </h4></label>
        <input type="email" name="email" class="form-control"   placeholder="Enter email">
        
    </div>
      
      
      <div class="form-group">
          
        <label ><h4><b>Password</b></h4></label>
        <input type="Password" name="password" class="form-control"   placeholder="Enter Your Password">
        
      </div>
      
     
      
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </center>
<br><br>
<style>
  .login{
    background-color: oldlace;
  }
</style>

@stop