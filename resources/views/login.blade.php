@extends('layout')


    @section('content')  
    <h1>Login page</h1>
    <br>
    <form action="/signin" method="POST">
        @csrf
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="password" id="pwd">
        </div>
       <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    @endsection