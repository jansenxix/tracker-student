<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\courselist;

class CourselistController extends Controller
{
    public function course (Request $request)
    {
        $course = new courselist;
        $course->code = $request->code;
        $course->description = $request->description;
       

        $course->save();
        return response()->json([
            'status'=>200,
            'message'=>'Course Added Succesfully',
        ]);
       
    }
    public function courselist()
    {
       $course = courselist::all();
       
        return view('course', ["course" => $course]);
    }

    public function update(Request $request)
    {
        $course = courselist::find($request->id);
        $course->code = $request->editcode;
        $course->description = $request->editdes;
      
        $course->save();

        
        return response()->json([
            'status'=>200,
            'message'=>' Succesfully',
        ]);
    }

    public function delete(Request $request)
    {
        $course = courselist::find( $request->id);

        $course->delete();
        
        return response()->json([
            'status'=>200,
            'message'=>'Course Deleted Succesfully',
        ]);
    }
}
