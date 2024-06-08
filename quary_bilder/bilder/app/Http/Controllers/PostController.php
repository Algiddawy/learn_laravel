<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = DB::table('post')->get();
        // return $posts;
        return view('posts.index',compact('posts'));
    }
    

        public function create(){
        return view('posts.create');
    }


    public function insert(Request $request){

        // return $request;
        DB::table('post')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return response('done data');
    }
    public function edit($id){
        // return $id;
        $post = DB::table('post')->where('id' , $id)->first();
        // return $post;
        return view('posts.edit' , compact('post'));
    }
    public function update(Request $request ,$id){
        // return $id;
        DB::table('post')->where('id' , $id)->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        // return response('done update');
        return redirect()->route('post');
    }
    public function delete($id){
        // return $id ;
        DB::table('post')->where('id' , $id)->delete();
        return redirect()->route('post');

    }
    public function deleteAll(){
        DB::table('post')->delete();
        return redirect()->route('post');

    }

}
