<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Feature;
use App\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Category;
use App\Listing;
use App\Gallery;
use App\ContactForm;
use App\Location;


class FrontEndController extends Controller
{
    //

    public function index(){

        $properties =Listing::with('features')->orderBy('id', 'DESC')->paginate(12);

        //dd($properties);
        $slider_images = HomeSlider::all();
        $features = Feature::all();
        $archive_posts = Blog::orderBy('id', 'ASC')->take(5)->get();
        $types = Category::all();
        //dd($properties);
        $locations =Location::all();
        return view('front.index',compact('properties','slider_images','features','archive_posts','types','locations'));

    }


    public function about(){
        return view('front.about');
    }


    public function contact(){
        return view('front.contact');
    }

    public function blog(){
        $archive_post = Blog::orderBy('id', 'DESC')->take(5)->get(['id','title']);
        $posts = Blog::orderBy('id', 'DESC')->paginate(3);
        $data = [
            'posts' => $posts,
            'archive_post' => $archive_post,
        ];
        return view('front.blog',$data);
    }

    // public function listings(){
    //
    //     $properties = Listing::orderBy('id', 'DESC')->paginate(18);
    //     $features = Feature::all();
    //     //dd($properties);
    //
    //     return view('front.listings',compact('properties','features'));
    // }

    public function singleListing($id){

        $listings =Listing::with('features')->find($id);
        $features = Feature::all()/*where('listing_id',$properties->id)*/;
        $galleries = Gallery::where('listing_id',$id)->get();
       // dd($listings);

        return view('front.single-listing',compact('galleries','listings','features'));

    }

    public function services(){
        return view('front.services');
    }

    public function downloadBrochure()
    {
        //PDF file is stored under project/public/downloads/brochure2020.pdf
        $file= public_path(). "/files/brochure2020.pdf";

        $headers = [
            'Content-Type: application/pdf',
        ];

        return Response::download($file, 'brochure2020.pdf', $headers);
    }

    public function SendMail(Request $request){
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required',
            'phone' =>  'required',
            /*'g-recaptcha-response' => 'required|captcha',*/
        ]);

        $name = $request->name;
        $phone = $request->phone;
        $mesage = $request->message;
        $email = $request->email;
        $data = array(
            'name'      =>  $name,
            'message'   =>  $mesage,
        );

        Mail::to('info@mustiinvestment.co.ke')->send(new SendMail($data));

        //the we store the message in our db
            $contact_message = new ContactForm();
            $contact_message->name = $name;
            $contact_message->phone = $phone;
            $contact_message->email = $email;
            $contact_message->message = $mesage;
            $contact_message->save();

        return back()->with('success', 'Thanks for contacting us!');
    }



    public function searchlisting(Request $request){

        $property_type = $request->input('category');
        $feature = $request->input('feature');
        $location = $request->input('location');


        $properties = Listing::where([
                                        'category_id'=>$property_type,
                                        'location_id'=>$location
                                    ])
                               ->orderBy('id', 'DESC')->paginate(18);
        $features = Feature::all();
    //  dd($properties);
         return view('front.listings',compact('properties','features'));
    }
    public function menuSearch(Request $request, $cat_type){

        $property_type = $request->input('category');
        $feature = $request->input('feature');
        $location = $request->input('location');
        $category_id= Category::where('type','like','%'.$cat_type)
                                 ->pluck('id')->first();
                                // ->get();


        $properties = Listing::where('category_id',$category_id)
                               ->orderBy('id', 'DESC')->paginate(18);
          // dd($properties);
        $features = Feature::all();
    //  dd($properties);
         return view('front.listings',compact('properties','features'));
    }



}
