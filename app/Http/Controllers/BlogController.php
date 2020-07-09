<?php

namespace App\Http\Controllers\Blog;

use App\Blog;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:manage-blog');
    }

  
    public function index()
    {
        $number_of_posts = Blog::count();
        $posts = Blog::with('writer')->get();
        $data = [
            'post_count' => $number_of_posts,
            'posts' => $posts,
        ];
        return view('backend.blog.index', $data);
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
                'title' => 'required',
                'body' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
        $article = new Blog();
        $article->title = $request->get('title');
        $article->body = $request->get('body');
        $article->author = Auth::id();
        $article->image = $input['imagename'];
        $article->save();
        return redirect()->route('blog.all_posts')->with('success', 'New article has been successfully created!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $post_id
     * @return \Illuminate\Http\Response
     */
    public function edit($post_id)
    {
        $post = Blog::find($post_id);
        return view('backend.blog.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $post_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post_id)
    {
        $post = Blog::find($post_id);
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            $post->image = $input['imagename'];
        }
        $post->save();
        return redirect()->route('blog.all_posts')->with('success', 'Post has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        $post = Blog::find($post_id);
        $post->delete();
        return redirect()->route('blog.all_posts')->with('success', 'Post has been successfully delete!');
    }



}
