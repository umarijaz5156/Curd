@extends('layout')

@section('content')
<center class="contactus" >
<div class="col-sm-6">
    <br><br>
    <h1> <b> Submit Your Request </b></h1>
    <form method="post" action="contactus" >
        @csrf
    <div class="form-group">
          <br>
          <label><h4><b>Name:</b> </h4></label> 
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
          
        <label ><h4><b>Contact:</b> </h4></label>
        <input type="text" name="contact" class="form-control"   placeholder="Enter Mobile Number">
        
      </div>
      <div class="form-group">
          
        <label ><h4><b>what You Want:</b> </h4></label>
        <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
        
      </div>
      
     
      
      <button type="submit" class="btn btn-primary">Submit</button> <br>
    </form>
    </center>
    <style>
    .contactus{
      background-color: oldlace;
    }
    </style>
<br><br>

@stop