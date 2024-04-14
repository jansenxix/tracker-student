<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    public function admin (Request $request)
    {
        $Admin = new admin;
        $Admin->fName = $request->fName;
        $Admin->Uname = $request->uName;
        $Admin->pass = $request->pass;
     
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName(); // Get the original file name
            $file->move('image', $fileName); // Move the file to a desired location, here 'uploads' directory
            
            $Admin->file = $fileName;
        }
        $Admin->save();
        return response()->json([
            'status'=>200,
            'message'=>'Admin Added Succesfully',
        ]);
       
    }
    public function adminlist()
    {
        $Admin = admin::all();
        return view('admin', ["admin" => $Admin]);
    }

    public function update(Request $request)
    {
        $Admin = admin::find($request->id);
        $Admin->fName = $request->editfName;
        $Admin->Uname = $request->editUname;
        $Admin->file = $request->editfile;
        $Admin->pass = $request->editpass;

        if ($request->hasFile('editfile')) {
            $file = $request->file('editfile');
            $fileName = $file->getClientOriginalName(); // Get the original file name
            $file->move('image', $fileName); // Move the file to a desired location, here 'uploads' directory
            
            $Admin->file = $fileName;
        }
        
        $Admin->save();
        
        return response()->json([
            'status'=>200,
            'message'=>' Succesfully',
        ]);
    }
    
    public function delete(Request $request)
    {
        $Admin = admin::find( $request->id);

        $Admin->delete();
        
        return response()->json([
            'status'=>200,
            'message'=>'Admin Deleted Succesfully',
        ]);
    }
 
}
