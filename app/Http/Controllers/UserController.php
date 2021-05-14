<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\User;
use App\Models\Photo;
use Illuminate\Http\Request;
use Auth;


class UserController extends Controller
{
    public function show($id) {

        
        $user = User::find($id);
        $blog = Blog::where('user_id', '=', $user->id)->get();
        


        return view('Profile.show', ['user' => User::findOrFail($id), 'blog' => $blog]);
    }
   
}
