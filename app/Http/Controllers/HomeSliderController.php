<?php

namespace App\Http\Controllers;

use App\HomeSlider;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');


        $this->middleware('permission:manage-homeslider');
    }

    public function index()
    {
        $number_of_images = HomeSlider::count();
        $slider_images = HomeSlider::get();

        $data = [
            'image_count' => $number_of_images,
            'slider_images' => $slider_images,
        ];
        return view('backend.home_slider.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.home_slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'desc' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/HomeSlider');
        $image->move($destinationPath, $input['imagename']);
        $slider = new HomeSlider();
        $slider->image_path = $input['imagename'];
        $slider->desc = $request->get('desc');
        $slider->save();
        return redirect()->route('slider_images')->with('success', 'New slider added chek it out on the website!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($image_id)
    {
        $slider_image = HomeSlider::find($image_id);
        $slider_image->delete();
        return redirect()->route('slider_images')->with('success', 'Slider image has been successfully delete!');
    }
}
