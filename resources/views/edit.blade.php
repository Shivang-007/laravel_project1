
@extends('layout')


@section('content')  
<h1>create account</h1>
<br>
<form action="/update" method="POST">

    @csrf
    <input type="hidden" name="id" value="{{$student['id']}}">
    <div class="form-group">
        <label for="email">Name:</label>
        <input type="text" class="form-control" name="name" value={{$student->name}} id="name">
      </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="text" class="form-control" name="email" value={{$student->email}} id="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" value={{$student->password}} id="pwd">
    </div>
   <br>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection