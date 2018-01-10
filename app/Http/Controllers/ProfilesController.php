<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public  function show($id){
       $profile = Profile::with('user')->where('user_id', $id)->get();
       if(!empty($profile)){
           return view('/interface.page.profile', compact('profile'));
       }
       else{
           abort(404);
       }

    }
}
