<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Category;
use App\Feature;
use App\Gallery;
use App\Location;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\Response;

class ListingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:manage-properties');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $number_of_houses =Listing::all()->count();
      //dd($number_of_houses);
      $categories = Category::all();
      $features = Feature::all();
      $properties =Listing::all();
      $location = Location::all();

      $data = [
          'number_of_houses' => $number_of_houses,
          'properties' => $properties,
          'categories' => $categories,
          'features' => $features,
          'locations' => $location,
      ];


        return view('backend.listing.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
     public function store(Request $request)
    {
        // $this->validate($request, [
        //     'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // // try {
            $user = Auth::user();
            $listing = new Listing();
            $listing->category_id = $request->input('property_type');;
            $listing->name = $request->input('property_name');
            $listing->location_id  = $request->input('property_location');
            $listing->location_description  = $request->input('location_description');
            $listing->description = $request->input('property_description');
            $listing->price_desc = $request->input('property_price');
            $listing->user_id   =   $user->id;
            $listing->save();

            $listing_id = $listing->id;
            //dd($listing_id);

            $feature = new Feature();
            $listing->features()->sync($request->input('features'));

            if($request->hasfile('main_image'))
            {

                $initial = "Musti_investments";
                $image = $request->file('main_image');
                $name =$initial . str_random() . time() . '.'.$image->getClientOriginalExtension();
                $destinationPath = '/Property_images';
                $image->move(public_path() . $destinationPath, $name);
                $gallery = new Gallery();
                $gallery->listing_id = $listing_id;
                $gallery->image_path = $name;
                $gallery->save();

            }
            if($request->hasfile('additional_image'))
            {

                foreach($request->file('additional_image') as $image)
                {

                $initial = "Musti_investments";
                $name =$initial . str_random() . time() . '.'.$image->getClientOriginalExtension();
                $destinationPath = '/Property_images';
                $image->move(public_path() . $destinationPath, $name);
                $gallery = new Gallery();
                $gallery->listing_id = $listing_id;
                $gallery->image_path = $name;
                $gallery->save();
                }
            }
            return redirect()->back()->with('success', 'Property has been successfully added!');


            // } catch (\Throwable $th) {
            //     //throw $th;
            // }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return Response
     */
    public function show(Listing $listing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
         $property =Listing::with('features')->find($id);
         $features = Feature::all()/*where('listing_id',$properties->id)*/;
         $categories = Category::all();
         $locations = Location::all();
         $galleries = Gallery::where('listing_id',$id)->get();

          //dd($galleries);
         return view('backend.listing.edit')->with([
             'property'=>$property,
             'features'=>$features,
             'categories'=>$categories,
             'locations'=>$locations,
             'galleries'=>$galleries,

         ]);
     }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listing  $listing
     * @return Response
     */
     public function update(Request $request, $property_id)
    {

                $listing = Listing::find($property_id);
                $listing->category_id = $request->input('property_type');;
                $listing->name = $request->input('property_name');
                $listing->location_id  = $request->input('property_location');
                $listing->location_description  = $request->input('location_description');
                $listing->description = $request->input('property_description');
                $listing->price_desc = $request->input('property_price');
                $listing->save();
                //dd($location_id);
                //dd($property_id);
                if ($request->input('features')){
                   $listing->features()->sync($request->input('features'));
                }


                if($request->hasfile('main_image'))
                {

                    $initial = "Musti_investments";
                    $image = $request->file('main_image');
                    $name =$initial . str_random() . time() . '.'.$image->getClientOriginalExtension();
                    $destinationPath = '/Property_images';
                    $image->move(public_path() . $destinationPath, $name);
                    $gallery = new Gallery();
                    $gallery->listing_id = $property_id;
                    $gallery->image_path = $name;
                    $gallery->save();

                }
                // if($request->hasfile('additional_image'))
                // {
                //
                //     foreach($request->file('additional_image') as $image)
                //     {
                //
                //     $initial = "Musti_investments";
                //     $name =$initial . str_random() . time() . '.'.$image->getClientOriginalExtension();
                //     $destinationPath = '/Property_images';
                //     $image->move(public_path() . $destinationPath, $name);
                //     Gallery::where('listing_id', $property_id)
                //     ->update([
                //         'image_path' => $name,
                //         'listing_id' => $property_id,
                //               ])
                //       ->skip(1)->first();
                //     }
                // }
                //
                 return redirect()->route('all_properties')->with('success', 'Property has been successfully updated!');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listing  $listing
     * @return Response
     */
    public function destroy($id)
    {
         Listing::find($id)->delete();

        return redirect()->back()->with('success', 'Property has been successfully deleted!');
    }

    public function destroyGalleryImage($id)
    {
         Gallery::find($id)->delete();

        return redirect()->back()->with('success', 'Image has been successfully deleted!');
    }
}
