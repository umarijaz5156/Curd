<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Student Ms</title>
    <style>
    .navbar{
        height: 80px;
    }
    .log{
      margin-left:500px;
    }
    
    </style>


</head>
<body>

<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Student Manegment System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="home"> Home Page</a>
      </li>
    
      
      
      @if(Session::get('user')) 
      <li class="nav-item">
        <a class="nav-link" href="list">List of Students</a>
      </li>
      @if(Session::get('admin')==1)
      <li class="nav-item">
        <a class="nav-link" href="add">Add New Student</a>
      </li>
      @endif
      <@if(Session::get('admin')==0)
      <li class="nav-item">
        <a class="nav-link" href="contactus">Contact with Admin</a>
      </li>
       @endif
     
      <div class=" log">
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        wellcome, {{Session::get('user') }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
         
        </div>
      </li>
        
      
        @else
        <li class="nav-item  ">
           <a class="nav-link" href="login">Login First</a>
        </li>
         <li class="nav-item   ">
         <a class="nav-link" href="register">Not Register? Do It Now</a>
         </li>
      </div>
        @endif
        
      
      
    </ul>
    
  </div>
</nav>




    
<div class="container">
    @yield('content')
      </div>    
</body>

</html>