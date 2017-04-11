<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller {
   public function insertform(){
      return view('stud_create');
   }
	
   public function insert(Request $request){
      $name = $request->input('stud_name');
      DB::table('student')->insert(
    ['name' => $name]
);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "insert">Click Here</a> to go back.';
   }
   public function insert2(Request $request){
      $lastname = $request->input('last_name');
	  $firstname = $request->input('first_name');
      $age = $request->input('age');
      DB::table('Persons')->insert(
    ['LastName' => $lastname,'FirstName' => $firstname,'Age' => $age]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "insert">Click Here</a> to go back.';
   }
}