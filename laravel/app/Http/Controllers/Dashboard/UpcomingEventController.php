<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ucevent;

class UpcomingEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activesateus = 'uce';
        $subactivesateus = 'uce.manage';
        $events = Ucevent::orderBy('id')->paginate(10);
        return view('back.ucevent.index',compact('activesateus','subactivesateus','events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activesateus = 'uce';
        $subactivesateus = 'uce.add';
        return view('back.ucevent.create',compact('activesateus','subactivesateus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'start_date' => 'required',
            'detail' => 'required'
        ]);
        //return $request->all();
        Ucevent::create($request->except('_token'));
        return redirect()->back()->with('message','Image Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activesateus = 'uce';
        $subactivesateus = 'uce.manage';
        $event = Ucevent::find($id);
        return view('back.ucevent.edit',compact('activesateus','subactivesateus','event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'start_date' => 'required',
            'detail' => 'required'
        ]);

        $event = Ucevent::find($id);
        $event->fill($request->all())->save();
        return redirect()->back()->with('message','Event Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Ucevent::find($id);
        $event->delete();
        return redirect()->back()->with('message','Event Deleted Successfully.');
    }
}
