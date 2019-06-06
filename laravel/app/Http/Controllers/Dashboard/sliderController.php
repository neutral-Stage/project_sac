<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Slider;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Auth;
use GuzzleHttp\Psr7;

class sliderController extends Controller
{
    public function create()
    {	
    	$activesateus = 'slide';
    	$subactivesateus = 'slide.add';
    	return view('back.slider.create',compact('activesateus','subactivesateus'));
    }

    public function store(Request $request)
    {	
        $validatedData = $request->validate([
            'type' => 'required',
            'title_1' => 'required',
            'title_2' => 'required',
            'photo' => 'required'
        ]);


        if($request->hasFile('photo')){
            $q = $request->quality;
            $file = $request->photo;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            Image::make(Input::file('photo'))->save('back/assets/img/slide/'.$filename, $q);
    	   //return $request->all();
            $request['image']=$filename;
        }
        $request['user_id']=Auth::user()->id;
        Slider::create($request->except('_token','photo','quality'));
    	
		return redirect()->back()->with('message','Slider Added Successfully.');
    }

    public function index()
    {
    	$activesateus = 'slide';
    	$subactivesateus = 'slide.manage';
    	$sliders = Slider::orderBy('type')->paginate(10);
    	return view('back.slider.index',compact('activesateus','subactivesateus','sliders'));
    }

    public function edit($id)
    {
    	$activesateus = 'slide';
    	$subactivesateus = 'slide.manage';
    	$slider = Slider::find($id);
    	return view('back.slider.edit',compact('activesateus','subactivesateus','slider'));
    }

    public function update(Request $request, $id)
    {
    	$slider = Slider::find($id);
    	if($request->hasFile('photo')){
    		$q = $request->quality;
			$file = $request->photo;
	        $extention = $file->getClientOriginalExtension();
	        $filename = rand(111111, 999999) . "." . $extention;
			Image::make(Input::file('photo'))
			//->resize(300, 200)
			->save('back/assets/img/slide/'.$filename, $q);
			$request['image']=$filename;

			if(file_exists('back/assets/img/slide/'.$slider->image) && $slider->image !=null )
            {
                unlink('back/assets/img/slide/'.$slider->image);
            }

		}
            $slider->fill($request->all())->save();
			return redirect()->back()->with('message','Slider Updated Successfully.');
    }

    public function delete($id)
    {
    	$slider = Slider::find($id);
    	if(file_exists('back/assets/img/slide/'.$slider->image) )
            {
                unlink('back/assets/img/slide/'.$slider->image);
            }
        $slider->delete();
		return redirect()->back()->with('message','Slider Deleted Successfully.');
    }
}
