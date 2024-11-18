<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('home',  ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('posts.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $summary = $request->summary;
        $postedBy = $request->posted_by;

        // validate data
        $request->validate([
            'title' => ['required', 'min:3'],
            'summary' => ['required', 'min:5'],
            'posted_by' => ['required', "exists:users,id"]
        ]);

        // insert post into posts
        Post::create([
            'title' => $title,
            'summary' => $summary,
            'user_id' => $postedBy
        ]);

        return to_route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $singleBlogPost = Post::findorfail($id);
        // dd($singleBlogPost);

        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $users = User::all();

        return view('posts.edit', ['post' => $post, 'users' => $users]);
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
        // get the post
        $title = $request->title;
        $summary = $request->summary;
        $postedBy = $request->posted_by;

        $singlePost = Post::find($id);

        $singlePost->update([
            'title' => $title,
            'summary' => $summary,
            'user_id' => $postedBy
        ]);

        return to_route('posts.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return to_route('posts.index');
    }
}
