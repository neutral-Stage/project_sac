<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ucevent;
use App\Ucimage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class UcEventImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $activesateus = 'uce';
        $images = Ucimage::where('ucevent_id', $id)->select('id','image')->get();
        //return $images;
        $event = Ucevent::where('id', $id)->select('id','name')->first();
        return view('back.ucevent.image.create',compact('activesateus','event','images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $validatedData = $request->validate([
            'photo' => 'required'
        ]);


        if($request->hasFile('photo')){
            $q = $request->quality;
            $file = $request->photo;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            Image::make(Input::file('photo'))->save('back/assets/img/evimage/'.$filename, $q);
           //return $request->all();
            $request['image']=$filename;
        }
        Ucimage::create($request->except('_token','photo','quality'));
        
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return $id;
        $image = Ucimage::find($id);
        if(file_exists('back/assets/img/evimage/'.$image->image) )
            {
                unlink('back/assets/img/evimage/'.$image->image);
            }
        $image->delete();
        return redirect()->back()->with('message','Image Deleted Successfully.');
    }
}
