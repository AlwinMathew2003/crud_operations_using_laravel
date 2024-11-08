@extends('layout.frontend')

@section('content')

<h1> Welcome to Laravel Applicatioin </h1>


<form action="{{ url('add')}}" method ="GET">
  <div class="form-group">
    <label for="nameInput">Name</label>
    <input type="text" class="form-control" id="nameInput" name = "name" placeholder="Enter your name">
  </div>
  
  <div class="form-group">
    <label for="emailInput">Email address</label>
    <input type="email" class="form-control" id="emailInput" name = "email" aria-describedby="emailHelp" placeholder="Enter your email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection