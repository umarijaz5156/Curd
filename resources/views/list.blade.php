@extends('layout')

@section('content')
<br><br>
<div class="list">
<h1> <b> There is the list of Students</b> </h1>

<a href="{{ url('export') }}" class="btn btn-primary">  Export File </a> 
  
<br>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Class</th>
      @if(Session::get('admin')==1)
      <th scope="col">Delete Data</th>
      <th scope="col">Updated Date</th>
      @endif
      
    </tr>
  </thead>
  <tbody>
@foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->class}}</td>
      @if(Session::get('admin')==1)
      
      <td> <a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a> </td>
      <td> <a href="edit/{{$item->id}}"><i class="fa fa-edit"></i></a> </td>
      @endif
    </tr>
@endforeach
   
  </tbody>
   
</table>
</div>
<br>
<div>
    {{$data->links()}}
</div>
<style>
 .list{
   background-color: oldlace;
 }
    .w-5{
        display: none;
    }
</style>

<br><br>

@stop