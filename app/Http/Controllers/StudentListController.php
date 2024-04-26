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
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Illuminate\Support\Str;

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

    public function report1() {
        $students = Studentlist::all();
        $record = [];
        foreach ($students as $student) {
            $course = courselist::find($student->course);
            $admin = admin::where("student_id", $student->id)->first();
            if(!isset($admin->data))
            {
                continue;
            }
            $data = json_decode($admin->data);

            $item =  [
                "studentNo" => $student->studentNumber,
                "name" => $student->fname . " " . $student->lname,
                "course" => $course->code,
                "yearTerm" => $student->acadYear . "/" . ($student->acadTerm == 1 ? "1st Term" : "2nd Term"),
                "address" => $data->a->address ?? "",
                "email" => $data->a->email ?? "",
                "contactNumber" => $data->a->contact_number ?? "",
                "phoneNumber" => $data->a->phone_number ?? "",
            ];

            $record[] = $item;
        }
        return view("respondent", ["record" => $record]);
    }

    public function report2() {
        $students = Studentlist::all();
        $record = [];
        foreach ($students as $student) {
            $course = courselist::find($student->course);
            $admin = admin::where("student_id", $student->id)->first();
            if(!isset($admin->data))
            {
                continue;
            }
            $data = json_decode($admin->data);

            $item =  [
                "studentNo" => $student->studentNumber,
                "name" => $student->fname . " " . $student->lname,
                "course" => $course->code,
                "yearTerm" => $student->acadYear . "/" . ($student->acadTerm == 1 ? "1st Term" : "2nd Term"),
                "employed" => $data->d->employed ?? "",
                "presentEmploymentStatus" => $data->d->present_employment_status ?? "",
                "presentOccupation" => $data->d->present_occupation ?? "",
                "firstJob" => $data->d->first_job ?? "",
            ];

            $record[] = $item;
        }
        return view("employment", ["record" => $record]);
    }

    public function report3() {
        $students = Studentlist::all();
        $record = [];
        foreach ($students as $student) {
            $course = courselist::find($student->course);
            $admin = admin::where("student_id", $student->id)->first();
            if(!isset($admin->data))
            {
                continue;
            }
            $data = json_decode($admin->data);

            $item =  [
                "studentNo" => $student->studentNumber,
                "name" => $student->fname . " " . $student->lname,
                "course" => $course->code,
                "yearTerm" => $student->acadYear . "/" . ($student->acadTerm == 1 ? "1st Term" : "2nd Term"),
                "curriculumRelevantJob" => $data->d->curriculum_relevant_job ?? "",
            ];

            $record[] = $item;
        }
        return view("job", ["record" => $record]);
    }

    public function report4() {
        $students = Studentlist::all();
        $record = [];
        foreach ($students as $student) {
            $course = courselist::find($student->course);
            $admin = admin::where("student_id", $student->id)->first();
            if(!isset($admin->data))
            {
                continue;
            }
            $data = json_decode($admin->data);

            $item =  [
                "studentNo" => $student->studentNumber,
                "name" => $student->fname . " " . $student->lname,
                "course" => $course->code,
                "yearTerm" => $student->acadYear . "/" . ($student->acadTerm == 1 ? "1st Term" : "2nd Term"),
                "option1" => $data->d->yes_useful_op1 ?? "",
                "option2" => $data->d->yes_useful_op2 ?? "",
                "option3" => $data->d->yes_useful_op3 ?? "",
                "option4" => $data->d->yes_useful_op4 ?? "",
                "option5" => $data->d->yes_useful_op5 ?? "",
                "option6" => $data->d->yes_useful_op6 ?? "",
            ];

            $record[] = $item;
        }
        return view("useful", ["record" => $record]);
    }

    public function downloadExcel()
    {
        // Load the template Excel file
        $templatePath = public_path('excelformat/ProfileRespondent.xlsx');
        $spreadsheet = IOFactory::load($templatePath);

        // Get the active sheet
        $sheet = $spreadsheet->getActiveSheet();

        // Populate the data into the template (example)

        $students = Studentlist::all();


        $row = 5;
        foreach ($students as $student) {
            $course = courselist::find($student->course);
            $admin = admin::where("student_id", $student->id)->first();
            if(!isset($admin->data))
            {
                continue;
            }
            $data = json_decode($admin->data);
            Log::info(json_encode($data));
            $sheet->setCellValue('A'.$row, $student->studentNumber);
            $sheet->setCellValue('B'.$row, $student->fname . " " . $student->lname);
            $sheet->setCellValue('C'.$row, $course->code);
            $sheet->setCellValue('D'.$row, $student->acadYear . "/" . ($student->acadTerm == 1 ? "1st Term" : "2nd Term"));
            $sheet->setCellValue('E'.$row, $data->a->address ?? "");
            $sheet->setCellValue('F'.$row, $data->a->email ?? "");
            $sheet->setCellValue('G'.$row, $data->a->contact_number ?? "");
            $sheet->setCellValue('H'.$row, $data->a->phone_number ?? "");
            $row++;
        }

        // Set headers for download
        $headers = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => 'attachment; filename="example.xlsx"',
        ];

        // Create Excel writer
        $writer = new Xlsx($spreadsheet);

        // Create a temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'excel');

        // Save Excel to temporary file
        $writer->save($tempFile);

        // Return Excel file as response
        return response()->download($tempFile, 'example.xlsx', $headers)->deleteFileAfterSend(true);
    }

    public function downloadExcel2()
    {
        // Load the template Excel file
        $templatePath = public_path('excelformat/EmploymentStatus.xlsx');
        $spreadsheet = IOFactory::load($templatePath);

        // Get the active sheet
        $sheet = $spreadsheet->getActiveSheet();

        // Populate the data into the template (example)

        $students = Studentlist::all();


        $row = 5;
        foreach ($students as $student) {
            $course = courselist::find($student->course);
            $admin = admin::where("student_id", $student->id)->first();
            if(!isset($admin->data))
            {
                continue;
            }
            $data = json_decode($admin->data);
            Log::info(json_encode($data));
            $sheet->setCellValue('A'.$row, $student->studentNumber);
            $sheet->setCellValue('B'.$row, $student->fname . " " . $student->lname);
            $sheet->setCellValue('C'.$row, $course->code);
            $sheet->setCellValue('D'.$row, $student->acadYear . "/" . ($student->acadTerm == 1 ? "1st Term" : "2nd Term"));
            $sheet->setCellValue('E'.$row, $data->d->employed ?? "");
            $sheet->setCellValue('F'.$row, $data->d->present_employment_status ?? "");
            $sheet->setCellValue('G'.$row, $data->d->present_occupation ?? "");
            $sheet->setCellValue('H'.$row, $data->d->first_job ?? "");
            $row++;
        }

        // Set headers for download
        $headers = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => 'attachment; filename="example.xlsx"',
        ];

        // Create Excel writer
        $writer = new Xlsx($spreadsheet);

        // Create a temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'excel');

        // Save Excel to temporary file
        $writer->save($tempFile);

        // Return Excel file as response
        return response()->download($tempFile, 'example.xlsx', $headers)->deleteFileAfterSend(true);
    }


    public function downloadExcel3()
    {
        // Load the template Excel file
        $templatePath = public_path('excelformat/JobPlacement.xlsx');
        $spreadsheet = IOFactory::load($templatePath);

        // Get the active sheet
        $sheet = $spreadsheet->getActiveSheet();

        // Populate the data into the template (example)

        $students = Studentlist::all();


        $row = 5;
        foreach ($students as $student) {
            $course = courselist::find($student->course);
            $admin = admin::where("student_id", $student->id)->first();
            if(!isset($admin->data))
            {
                continue;
            }
            $data = json_decode($admin->data);
            Log::info(json_encode($data));
            $sheet->setCellValue('A'.$row, $student->studentNumber);
            $sheet->setCellValue('B'.$row, $student->fname . " " . $student->lname);
            $sheet->setCellValue('C'.$row, $course->code);
            $sheet->setCellValue('D'.$row, $student->acadYear . "/" . ($student->acadTerm == 1 ? "1st Term" : "2nd Term"));
            $sheet->setCellValue('E'.$row, $data->d->curriculum_relevant_job ?? "");
            $row++;
        }

        // Set headers for download
        $headers = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => 'attachment; filename="example.xlsx"',
        ];

        // Create Excel writer
        $writer = new Xlsx($spreadsheet);

        // Create a temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'excel');

        // Save Excel to temporary file
        $writer->save($tempFile);

        // Return Excel file as response
        return response()->download($tempFile, 'example.xlsx', $headers)->deleteFileAfterSend(true);
    }


    public function downloadExcel4()
    {
        // Load the template Excel file
        $templatePath = public_path('excelformat/UsefulCompetencies.xlsx');
        $spreadsheet = IOFactory::load($templatePath);

        // Get the active sheet
        $sheet = $spreadsheet->getActiveSheet();

        // Populate the data into the template (example)

        $students = Studentlist::all();


        $row = 5;
        foreach ($students as $student) {
            $course = courselist::find($student->course);
            $admin = admin::where("student_id", $student->id)->first();
            if(!isset($admin->data))
            {
                continue;
            }
            $data = json_decode($admin->data);
            Log::info(json_encode($data));
            $sheet->setCellValue('A'.$row, $student->studentNumber);
            $sheet->setCellValue('B'.$row, $student->fname . " " . $student->lname);
            $sheet->setCellValue('C'.$row, $course->code);
            $sheet->setCellValue('D'.$row, $student->acadYear . "/" . ($student->acadTerm == 1 ? "1st Term" : "2nd Term"));
            $sheet->setCellValue('E'.$row, $data->d->yes_useful_op1 ?? "");
            $sheet->setCellValue('F'.$row, $data->d->yes_useful_op2 ?? "");
            $sheet->setCellValue('G'.$row, $data->d->yes_useful_op3 ?? "");
            $sheet->setCellValue('H'.$row, $data->d->yes_useful_op4 ?? "");
            $sheet->setCellValue('I'.$row, $data->d->yes_useful_op5 ?? "");
            $row++;
        }

        // Set headers for download
        $headers = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => 'attachment; filename="example.xlsx"',
        ];

        // Create Excel writer
        $writer = new Xlsx($spreadsheet);

        // Create a temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'excel');

        // Save Excel to temporary file
        $writer->save($tempFile);

        // Return Excel file as response
        return response()->download($tempFile, 'example.xlsx', $headers)->deleteFileAfterSend(true);
    }

}
