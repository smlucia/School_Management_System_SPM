<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $staff = Staff::where('name','LIKE', "%$search%")->orWhere('name','LIKE', "%$search%")->get();

        }else{
            $staff= Staff::latest()->get();
        }

        $data = compact('staff','search');
        return view('staff.index')->with($data);
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|min:3|unique:staff',
            'address'=> 'required|min:5',
            'designation'=> 'required|min:5',
            'distance'=> 'required|max:3',
            'contact_no'=> 'required|min:10|max:10|unique:staff',
            'NIC'=> 'required|min:10|max:10|unique:staff',
            'Email'=> 'required|min:10|max:100|unique:staff|email',
        ],[
            'name.required'=>'The Name must be atleast 3 characters'
        ]);

        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        Staff::create($requestData);
        return redirect('staff')->with('flash_message', 'Staff Addedd!');
    }

    public function show($id)
    {
        $staff = Staff::find($id);
        return view('staff.show')->with('staff', $staff);
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('staff.edit')->with('staff', $staff);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required|min:3',
            'address'=> 'required|min:5',
            'designation'=> 'required|min:5',
            'distance'=> 'required|max:3',
            'contact_no'=> 'required|min:10|max:10',
            'Email'=> 'required|min:10|max:100|email',
        ],[
            'name.required'=>'The Staff Name is required'
        ]);


        $staff = Staff::find($id);
        $input = $request->all();

        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $input["photo"] = '/storage/'.$path;

        $staff->update($input);
        return redirect('staff')->with('flash_message', 'staff Updated!');
    }

    public function destroy($id)
    {
        Staff::destroy($id);
        return redirect('staff')->with('flash_message', 'staff deleted!');
    }

    //pdf generating
    public function generateStaffPDF()
    {
        $results = DB::table('staff')
        ->select('name', 'distance')
        ->whereBetween('distance', [0, 35])
        ->get();

       $results2 = DB::table('staff')
        ->select('name', 'distance')
        ->where('distance', '>' , '35')
        ->get();
        
        $pdf = PDF::loadView('staff.report', compact('results','results2'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('staff.pdf');
    }

    public function getDetails(){
        $reports = Staff::all();
        $results = DB::table('staff')
           ->select('name', 'distance')
           ->whereBetween('distance', [0, 35])
           ->get();

        $results2 = DB::table('staff')
           ->select('name', 'distance')
           ->where('distance', '>' , '35')
           ->get();
        return view('staff.report', compact('reports','results', 'results2'));
    }
}