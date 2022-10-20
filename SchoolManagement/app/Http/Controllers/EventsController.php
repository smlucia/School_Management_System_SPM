<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\File;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $events = Event::where('event_name','LIKE', "%$search%")->orWhere('event_name','LIKE', "%$search%")->get();

        }else{
            $events= Event::latest()->get();
        }

        $data = compact('events','search');
        return view('events.index')->with($data);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_name'=> 'required|min:5|unique:events',
            'location'=> 'required|min:5',
            'coordinator'=> 'required|min:3',
        ],[
            'event_name.required'=>'The Event Name is required'
        ]);

        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        Event::create($requestData);
        return redirect('event')->with('flash_message', 'Event Addedd!');

    }

    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show')->with('events', $event);
    }

    public function edit( Request $request,$id)
    {

        $event = Event::find($id);
        return view('events.edit')->with('events', $event);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'event_name'=> 'required|min:5',
            'location'=> 'required|min:5',
            'coordinator'=> 'required|min:3',
        ],[
            'event_name.required'=>'The Event Name is required'
        ]);

        $event = Event::find($id);
        $input = $request->all();

        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $input["photo"] = '/storage/'.$path;

        $event->update($input);
        return redirect('event')->with('status', 'event Updated!');
    }

    public function destroy($id)
    {
        Event::destroy($id);
        return redirect('event')->with('flash_message', 'Event deleted!');
    }

    //pdf generating
    public function generateEventPDF()
    {
        $results = DB::table('events')
        ->select('type', DB::raw('SUM(tot_expence) as total_exp'))
        ->where('e_status', '=', 'completed')
        ->whereYear('e_date', '=', '2022')
        ->groupBy('type')
        ->get();
        
        $pdf = PDF::loadView('events.report', compact('results'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('event.pdf');
    }

    public function getEventDetails(){
        $reports = Event::all();
        $results = DB::table('events')
        ->select('type', DB::raw('SUM(tot_expence) as total_exp'))
        ->where('e_status', '=', 'completed')
        ->whereYear('e_date', '=', '2022')
        ->groupBy('type')
        ->get();
        
        return view('events.report', compact('reports','results'));
    }
}