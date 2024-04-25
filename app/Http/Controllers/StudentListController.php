<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\PasswordMail;
use App\Models\admin;
use App\Models\StudentlistImport;
use Illuminate\Http\Request;
use App\Models\Studentlist;
use App\Models\courselist;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\IOFactory;

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

    public function register(Request $request)
    {
        $profile = $request['a'];
        $admin = new admin();
        $admin->fName = $profile["name"];
        $admin->Uname = $profile["email"];
        $admin->pass = $this->generateRandomPassword();
        $admin->file = "test.jpg";
        $admin->data = json_encode($request->all());
        $admin->student_id = $request["id"];
        $admin->user_type = 2;
        $admin->save();

        Mail::to($profile["email"])->send(new PasswordMail($admin));

        return redirect("/");
    }

    public function generateRandomPassword($length = 12)
    {
        return Str::random($length);
    }


    public function import(Request $request)
    {
        $course = $request->course;

        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        $file = $request->file("file");

        $spreadsheet = IOFactory::load($file->getPathname());

        $sheet = $spreadsheet->getActiveSheet();

        $highestRow = $sheet->getHighestRow();

        for ($row = 2; $row <= $highestRow; $row++) {
            $firstName = $sheet->getCell([1, $row]);
            $lastName = $sheet->getCell([2, $row]);
            $studentNo = $sheet->getCell([3, $row]);
            $academicYear = $sheet->getCell([4, $row]);
            $term = $sheet->getCell([5, $row]);

            $studentlist = new  Studentlist();
            $studentlist->fname = $firstName;
            $studentlist->lname = $lastName;
            $studentlist->studentNumber = $studentNo;
            $studentlist->acadYear = $academicYear;
            $studentlist->acadTerm = $term;
            $studentlist->course = $course;

            $studentlist->save();
        }

        return redirect("/studentlist");
    }
}
