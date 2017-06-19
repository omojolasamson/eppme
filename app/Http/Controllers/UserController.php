<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUserProfile($id){
        $profile = DB::table('users')->where('id', $id)->get();
        return view('userProfile', compact('profile'));
    }

    public function getAllUser(){
        $users = DB::table('users')->get();
        return view('userView', compact('users'));
    }
}
