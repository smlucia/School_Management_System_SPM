<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $students = Student::where('index','LIKE', "%$search%")->orWhere('index','LIKE', "%$search%")->get();

        }else{
            $students= Student::latest()->get();
        }

        $data = compact('students','search');
        return view('students.index')->with($data);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|min:3|unique:students',
            'index'=> 'required|min:6|max:6|unique:students',
            'address'=> 'required|min:5',
            'parent_name'=> 'required|min:3|unique:students',
            'contact_no'=> 'required|min:10|max:10|unique:students',
            'nic'=> 'required|min:10|max:10|unique:students',
            'email'=> 'required|min:10|max:100|unique:students|email',
        ],[
            'name.required'=>'The Student Name is required'
        ]);


        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        Student::create($requestData);
        return redirect('student')->with('flash_message', 'Staff Addedd!');

    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required|min:3',
            'address'=> 'required|min:5',
            'parent_name'=> 'required|min:3',
            'contact_no'=> 'required|min:10|max:10',
            'nic'=> 'required|min:10|max:10',
            'email'=> 'required|min:10|max:100|email',
            'occupation'=> 'required',
        ],[
            'name.required'=>'The Student Name is required'
        ]);

        $student = Student::find($id);
        $input = $request->all();

        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $input["photo"] = '/storage/'.$path;

        $student->update($input);
        return redirect('student')->with('status', 'student Updated!');
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');
    }

    //pdf generating
    public function generateStudentPDF()
    {
        $results = DB::table('students')
        ->select('index', 'name')
            ->where('grade', '=', '5')
            ->get();

        $resultsCount = count($results);

        $results2 = DB::table('students')
        ->select('index', 'name')
        ->where('grade', '=', '11')
        ->get();

        $results2Count = count($results2);

        $results3 = DB::table('students')
        ->select('index', 'name')
        ->where('grade', '=', '13')
        ->get();

        $results3Count = count($results3);
        
        $pdf = PDF::loadView('students.report', compact('resultsCount', 'results2Count','results3Count','results', 'results2','results3'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('students.pdf');
    }

    public function getStudentDetails(){
        $reports = Student::all();
        $results = DB::table('students')
            ->select('index', 'name')
            ->where('grade', '=', '5')
            ->get();

        $resultsCount = count($results);

        $results2 = DB::table('students')
        ->select('index', 'name')
        ->where('grade', '=', '11')
        ->get();

        $results2Count = count($results2);

        $results3 = DB::table('students')
        ->select('index', 'name')
        ->where('grade', '=', '13')
        ->get();

        $results3Count = count($results3);

        return view('students.report', compact('reports','resultsCount', 'results2Count','results3Count','results', 'results2','results3'));
    }
}
