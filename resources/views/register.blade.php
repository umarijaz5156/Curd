@extends('layout')

@section('content')
<center class="register" >
<div class="col-sm-6">
    <br><br>
    <h1> <b> User Register Page </b></h1>
    <form method="post" action="register" >
        @csrf
    <div class="form-group">
          <br>
          <label ><h4><b>Name:</b> </h4> </label> 
          <input type="text" name="name" class="form-control"   placeholder="Enter Name">
          
    </div>
    <div class="form-group">
          
        <label ><h4><b>Email address:</b> </h4></label>
        <input type="email" name="email" class="form-control"   placeholder="Enter email">
        
    </div>
    <div class="form-group">
          
        <label ><h4><b>Address:</b> </h4></label>
        <input type="text" name="address" class="form-control"   placeholder="Enter address">
        
    </div>
     
      <div class="form-group">
          
        <label ><h4><b>Password:</b> </h4></label>
        <input type="Password" name="password" class="form-control"   placeholder="Enter Your Password">
        
      </div>
      <br>
     
      
      <button type="submit" class="btn btn-primary">Regisrer</button>
    </form>
  </center>
<br><br>
<style>
  .register{
    background-color: oldlace;
  }
</style>

@stop