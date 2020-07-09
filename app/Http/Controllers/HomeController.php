<?php

namespace App\Http\Controllers;

use App\Blog;
use App\ContactForm;
use App\Feature;
use App\HomeSlider;
use App\User;
use Illuminate\Http\Request;
use App\Category;
use App\Gallery;
use App\Listing;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:view-dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $number_of_posts = Blog::count();
        $number_of_properties = Listing::count();
        $number_of_users = User::count();
        $number_of_messages = ContactForm::count();
        $number_of_features = Feature::count();
        $number_of_Categories = Category::count();
        $number_of_banners = HomeSlider::count();

        $data = [
            'posts' => $number_of_posts,
            'properties' => $number_of_properties,
            'messages' => $number_of_messages,
            'users' => $number_of_users,
            'categories' => $number_of_Categories,
            'features' => $number_of_features,
            'banners' => $number_of_banners,
        ];
        return view('backend.index',$data);
    }
}
