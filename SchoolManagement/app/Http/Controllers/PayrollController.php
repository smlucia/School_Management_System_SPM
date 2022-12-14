<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;
use App\Models\Staff;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class PayrollController extends Controller
{
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $payroll = Payroll::where('staff_name','LIKE', "%$search%")->orWhere('staff_name','LIKE', "%$search%")->get();

        }else{
            $payroll= Payroll::latest()->get();
        }

        $data = compact('payroll','search');
        return view('payroll.index')->with($data);
    }

    public function create()
    {
        return view('payroll.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'staff_name' => 'required',
            'year'=> 'required|min:4|max:4',
            'salary'=> 'required',
            'month'=> 'required',
        ],[
            'staff_name.required'=>'The Staff Name is required',
            'salary.required'=>'The basic salary is required'
        ]);

        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        Payroll::create($requestData);
        return redirect('payroll')->with('flash_message', 'Payroll Addedd!');

    }

    public function show($id)
    {
        $payroll = Payroll::find($id);
        return view('payroll.show')->with('payroll', $payroll);
    }

    public function edit($id)
    {
        $payroll = Payroll::find($id);
        return view('payroll.edit')->with('payroll', $payroll);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ntf'=> 'nullable',
            'etf'=> 'nullable',
            'cost'=> 'nullable',
            'allowance'=> 'nullable'
        ],[
            'staff_name.required'=>'The Staff Name is required',
        ]);

        $payroll = Payroll::find($id);
        $input = $request->all();
        $payroll->update($input);
        return redirect('payroll')->with('flash_message', 'payroll Updated!');
    }

    public function destroy($id)
    {
        Payroll::destroy($id);
        return redirect('payroll')->with('flash_message', 'payroll deleted!');
    }

    function autoIndex()
    {
        return view('payroll.create');
    }
 
    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('staff')
                ->where('name', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
            foreach($data as $row)
            {
                $output .= '
                <li><a class="dropdown-item" href="#">'.$row->name.'</a></li>
                '; 
            }
            $output .= '</ul>';
            echo $output;
        }
    }


    //pdf generating
    public function generatePayrollPDF()
    {
        $results = DB::table('payroll')
        ->select('month', DB::raw('SUM(salary + cost + allowance) as total_sal'))
        ->where('year','=', '2022')
        ->orderByRaw('CASE WHEN month="January" THEN 1 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="February" THEN 2 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="March" THEN 3 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="April" THEN 4 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="May" THEN 5 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="June" THEN 6 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="July" THEN 7 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="August" THEN 8 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="September" THEN 9 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="October" THEN 10 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="November" THEN 11 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="December" THEN 12 ELSE null END DESC')
        ->groupBy('month')
        ->get();

        $pdf = PDF::loadView('payroll.report', compact('results'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('payroll.pdf');
    }

    public function getPayrollDetails(){
        $reports = Payroll::all();
        $results = DB::table('payroll')
        ->select('month', DB::raw('SUM(salary + cost + allowance) as total_sal'))
        ->where('year','=', '2022')
        ->orderByRaw('CASE WHEN month="January" THEN 1 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="February" THEN 2 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="March" THEN 3 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="April" THEN 4 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="May" THEN 5 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="June" THEN 6 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="July" THEN 7 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="August" THEN 8 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="September" THEN 9 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="October" THEN 10 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="November" THEN 11 ELSE null END DESC')
        ->orderByRaw('CASE WHEN month="December" THEN 12 ELSE null END DESC')
        ->groupBy('month')
        ->get();

        return view('payroll.report', compact('reports','results'));
    }
}