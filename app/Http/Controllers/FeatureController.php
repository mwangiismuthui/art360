<?php

namespace App\Http\Controllers;

use App\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:manage-features');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::all();
        return view('backend.feature.index',compact('features'));
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
                'name' => 'required',
            ]
        );
        $feature = new Feature();
        $feature->name = $request->get('name');
        $feature->save();
        return redirect()->route('all_features')->with('success', 'Property feature has been successfully added!');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $feature_id
     * @return void
     */
    public function destroy($feature_id)
    {
        $feature = Feature::find($feature_id);
        $feature->delete();
        return redirect()->route('all_features')->with('success', 'Feature deleted successfully');
    }
}
