<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return 'posts';
        $posts = Post::all();
        // $posts = Post::get();
        // return $posts;
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;

        //inserting new post1
        // $post = new post();
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();
        // return response("done adding");
        //inserting data post2
        // post::create([
        //     'title'=>$request->title,
        //     'body'=>$request->body
        // ]);
        post::create($request->all());
        // return view('posts.index');
        return response("done adding");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $posts = post::onlyTrashed()->get();
        // return $posts;
        return view('posts.softdelete' , compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // return $id;
        $post = Post::findorfail($id);
        // return $post;
        // if($post){
        //     return $post;
        // }else{
        //     return response('error');
        // }
        return view('posts.edit',compact('post'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $post = post::findorfail($id);
        //1st way

        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();
        //2nd way

        // $post->update([
        //     'title'=>$request->title,
        //     'body'=>$request->body
        // ]);
        //3rd way

        $post->update(
            $request->all()
        );
        return redirect()->route('posts.index');
        // return $post;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // 1st way
        // post::findorfail($id)->delete();
        // return redirect()->route('posts.index');

        // 2nd way
        post::destroy($id);
        return redirect()->route('posts.index');

    }
    public function restore($id){
        post::withTrashed()->where('id' , $id)->restore();
        return redirect()->back();
    }
    public function forcedelete($id){
        post::withTrashed()->where('id' , $id)->forceDelete();
        return redirect()->back();
    }
}
