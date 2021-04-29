@extends('layout')

@section('content')
<br><br>
<!doctype html>
<html lang="en">
  <head>
    <title>Laravel 8 Import Export Excel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container py-4">
          <div class="row">
              
          </div>

          <div class="card mt-4">
              <div class="card-header">
                <h5 class="card-title font-weight-bold">Export/Import Tutorial in Laravel 8</h5>
              </div>
              <div class="card-body">
                <div class="  text-center">
                    <a href="{{ route('import') }}" class="btn btn-primary">import to Excel/CSV</a>
                </div>
              </div>
          </div>
      </div>
  </body>
</html>
@stop