<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudUpdateController extends Controller
{
    public function index() {
    	$user = DB::select('select * from student');
    	return view('stud_edit_view',['users' => $user]);
    }
    public function show($id) {
    	$user = DB::select('select * from student where id = ?',[$id]);
    	return view('stud_update',['users'=>$user]);
    }
    public function edit(Request $request,$id){
    	$name= $request ->input('stud_name');

    	DB::update('update student set name = ? where id = ?',[$name,$id]);
    	echo "xxx";
    	echo "<a href='/laravel/public/edit-records'>Back</a>";
    }
    public function del($id) {
    	DB::delete('delete from student where id = ?',[$id]);
    	echo "Deleted";
    }
   //  public function edit(Request $request,$id) {
   //    $name = $request->input('stud_name');
   //    DB::update('update student set name = ? where id = ?',[$name,$id]);
   //    echo "Record updated successfully.<br/>";
   //    echo '<a href = "/edit-records">Click Here</a> to go back.';
   // }
}
