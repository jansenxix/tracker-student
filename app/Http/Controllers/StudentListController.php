<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Studentlist;
use App\Models\courselist;

class StudentListController extends Controller
{
    public function create (Request $request)
    {
        $student = new Studentlist;
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->studentNumber = $request->snumber;
        $student->acadYear = $request->acadYear; 
        $student->acadTErm = $request->acadTerm; 
        $student->course = $request->course; 

        $student->save();
        return response()->json([
            'status'=>200,
            'message'=>'Student Added Succesfully',
        ]);
       
    }

    public function studentlist()
    {
       $student = Studentlist::all();
       $courselist = courselist::all();
       
        return view('studentlist', ["student" => $student, "courses" => $courselist]);
    }

    
    public function update(Request $request)
    {
        $Student = Studentlist::find($request->id);
        $Student->fname = $request->fname;
        $Student->lname = $request->lname;
        $Student->studentNumber = $request->snumber;
        $Student->acadYear = $request->editacadYear; 
        $Student->acadTerm = $request->editacadTerm; 
        $Student->course = $request->editcourse; 
        $Student->save();

        
        return response()->json([
            'status'=>200,
            'message'=>' Succesfully',
        ]);
    }

    public function delete(Request $request)
    {
        $Student = Studentlist::find( $request->id);

        $Student->delete();
        
        return response()->json([
            'status'=>200,
            'message'=>'Student Deleted Succesfully',
        ]);
    }
 
      public function getData()
    {
        $items = Item::all();
        return datatables()->of($items)->make(true);
    }
    
      public function index()
    {
        return view('items.index');
    }
}
