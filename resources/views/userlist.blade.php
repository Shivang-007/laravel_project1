
@extends('layout')


    @section('content')  
    <style>
        a{
            color:white;
            text-decoration: none;
        }
        a:hover{
             color:white;
        }
    </style>
    <br>
    <div>
    <h1>Student list page</h1>
    <button class="btn btn-primary"><a href="/">Logout</a></button>
    </div>
    <br>
    <div>
        <table class="table table-striped table-hover table-responsive">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan="2">Operation</th>
        </tr>
        @foreach($student as $stud)
        <tr>
            <td>{{$stud['id']}}</td>
            <td>{{$stud['name']}}</td>
            <td>{{$stud['email']}}</td> 
            <td><a href={{"edit/".$stud['id']}}><i class="fa-solid fa-pen-to-square" style="color: blue"></i></a>    <a href={{"delete/".$stud['id']}}><i class="fa-solid fa-trash-can" style="color: red"></i></a></td>
        </tr>
        @endforeach
        </table>
    </div>
    <br>
    
    @endsection