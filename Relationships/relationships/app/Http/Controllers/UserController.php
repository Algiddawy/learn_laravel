<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        
        $role = Role::find(1);
        return $role->users;
        // $user = User::find(2);
        // return $user->roles;

    //     $user = User::find(1)->phone;
    //     return $user;
    // }
    // public function index(){
        
    //     $phone = Phone::find(1);
    //     return $phone->user;
    }
}
