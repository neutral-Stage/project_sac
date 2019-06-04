<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Choirteammember;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class ChoirMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activesateus = 'choir';
        $subactivesateus = 'tm.manage';
        $members = Choirteammember::orderBy('id')->paginate(10);
        return view('back.choir.tmember.index',compact('activesateus','subactivesateus','members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activesateus = 'choir';
        $subactivesateus = 'tm.add';
        return view('back.choir.tmember.create',compact('activesateus','subactivesateus'));
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
            'name' => 'required',
            'image' => 'required'
        ]);

        //return $request->all();
        if($request->hasFile('image')){
            $q = $request->quality;
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            Image::make(Input::file('image'))->save('back/assets/img/teamMember/'.$filename, $q);
           //return $request->all();
            $request['photo']=$filename;
        }
        Choirteammember::create($request->except('_token','image','quality'));
        
        return redirect()->back()->with('message','Member Added Successfully.');
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
        $activesateus = 'choir';
        $subactivesateus = 'tm.manage';
        $member = Choirteammember::find($id);
        return view('back.choir.tmember.edit',compact('activesateus','subactivesateus','member'));
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
            'name' => 'required',
        ]);

        //return $request->all();
        $member = Choirteammember::find($id);
        if($request->hasFile('image')){
            $q = $request->quality;
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            Image::make(Input::file('image'))->save('back/assets/img/teamMember/'.$filename, $q);
           //return $request->all();
            $request['photo']=$filename;
            if(file_exists('back/assets/img/teamMember/'.$member->image) && $member->image !=null )
            {
                unlink('back/assets/img/teamMember/'.$member->image);
            }
        }
        $member->fill($request->all())->save();
        return redirect()->back()->with('message','Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Choirteammember::find($id);
        if(file_exists('back/assets/img/teamMember/'.$member->photo) )
            {
                unlink('back/assets/img/teamMember/'.$member->photo);
            }
        $member->delete();
        return redirect()->back()->with('message','Slider Deleted Successfully.');
    }
}
