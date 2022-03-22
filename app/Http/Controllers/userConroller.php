<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PHPUnit\Framework\MockObject\Builder\Stub;
use Illuminate\Support\Facades\Session;

class userConroller extends Controller
{
    //
    function list(Request $req){
        if($req->session()->pull('logData')){
            $student=Student::all();
            return view('userlist',['student'=>$student]);
        
        } 
        }
    function create(){
        return view('create');
    }
   
    function signin(Request $req){
        $data=Student::select('*')->where([ 
            ['email','=',$req->email],
            ['password','=',$req->password]
        ])->get();
        if(sizeof($data)==0){
            return redirect('/create');
            
        }
        if(sizeof($data)>0){
        $req->session()->put('logData',[$req->input()]);
        return redirect('/list');
        }
       
    }
    function signup(Request $req){
          $student=new Student;
          $student->name=$req->name;
          $student->email=$req->email;
          $student->password=$req->password;
          $student->save();
          if($req->session()->put('logData',[$req->input()])){
            
              return redirect('/list');
          }

    }
    function signout(Request $req){
        if($req->session()->pull('logData')){
            return redirect('/');
        }
    }
    function edit($id){
        $student=Student::find($id);
        return view('edit',['student'=>$student]); 
    }
    function update(Request $req){
          $student=Student::find($req->id);
          $student->name=$req->name;
          $student->email=$req->email;
          $student->password=$req->password;
          $student->save();
          if($req->session()->put('logData',[$req->input()])){
            
            return redirect('/list');
        }
          
          //   
        
    }
    function delete($id){
        Student::destroy($id);
        return redirect('/list');
    }
}
