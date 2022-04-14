<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @returns Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $posts = Posts::all();

        return view('posts.list', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $categories = Category::all();

        return view('posts.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
//        dd($request->post('category'));


        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = $request->file('image')->getClientOriginalName();

        $request->image->move(public_path('images'), $imageName);

        Posts::create([
            'title'          => $request->post('title'),
            'image_name'     => $imageName,
            'category'       => $request->post('category'),
            'body'           => $request->post('body'),
            'published'      => $request->post('published'),
        ]);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        return view('post');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function preview(Posts $posts)
    {
        return view('posts.preview');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
      */
    public function edit(Posts $posts)
    {
        $categories = Category::all();
        return view('posts.edit', ['post' => $posts, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Posts $posts)
    {



        $posts->title     = $request->post('title');
        $posts->body      = $request->post('body');
        $posts->category  = $request->post('category');
        $posts->published = (bool) $request->post('published');

        if ($request->hasFile('image')) {

           $newImageFileName = $request->file('image')->getClientOriginalName();
           $request->image->move(public_path('images'), $newImageFileName);

           $posts->image_name =$newImageFileName;
        }

        $posts->save();

        return redirect('/posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
