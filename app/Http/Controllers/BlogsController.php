<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//using eloquent ORM
//use namespace\model_name
use App\Models\Blog;

//To use SQL commands
use DB;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*index of blog showing all the posts stored in the Blog table in the database 
         without regards to order*/
        // $blogPost = Blog::all();
        // $blogPost = DB::select('SELECT * FROM blogs');
        //to display all posts in a particular order
        // $blogPost = Blog::orderBy('id','desc')->get();
        //For pagination
        $blogPost = Blog::orderBy('id','desc')->paginate(5);
        return view('blog/index')->with('blogPost', $blogPost);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find the id of the post to be shown
        $post = Blog::find($id);
        //show individual blog that is posted for public view
        return view('blog/post')->with('post', $post);
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
        //
    }
}
