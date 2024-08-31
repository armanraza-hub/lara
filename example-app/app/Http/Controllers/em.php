<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ems;

class em extends Controller
{
    function index(){
        return view("employ");
   }   
   function create(Request $request){
      $request->validate([
         "name"=> "required", 
         "age"=> "required",
         "email"=> "required|email",
         "designation"=> "required",
         
        ]);  
  
      $sa = new ems();
      $sa->Name = $request->input("name");
      $sa->age = $request->input("age");
      $sa->email = $request->input("email");
      $sa->designation = $request->input("designation");
      
      if( $sa->save( ) ){
         return redirect("i")->with("success","recordinserted"); 
        }else{
           return redirect("i")->with("error","not"); 
        } 
     }
     

     function view(){
      $sa = ems::all();
      return view("employ", compact("sa")); 
     }
     
 }
 

  

