<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ShowUser(){
        
        return "Usersss";
    }
    public function CreatePost(){

        return view("posts");
    }
}
